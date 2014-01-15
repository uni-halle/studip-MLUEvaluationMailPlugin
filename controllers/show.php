<?php

require 'application.php';
require_once 'lib/classes/Institute.class.php';

class ShowController extends ApplicationController {

    function before_filter($action, $args) {
        parent::before_filter($action, $args);
        Navigation::activateItem('/course/members/' . $this->plugin->me);
    }

    function index_action() {
        $this->course = Seminar::getInstance($this->plugin->seminar_id);

        $this->institut = Institute::find($this->course->institut_id);

        $this->config = $this->plugin->config;
        $this->dozenten = array_map('get_fullname', array_keys($this->course->getMembers('dozent')));

    }

    function send_action() {
        $pdf = new ExportPDF();
        $pdf->setHeaderData(true, 0, '', 'Lehrveranstaltungsevaluation an der Martin-Luther-Universität Halle-Wittenberg SoSe 2013');
        //$pdf->setHeaderData(true, 0, '', '');
        $pdf->SetDisplayMode('real');
        $pdf->addPage();
        $this->index_action();


        $this->render_template('show/pdfpage1.php', null);
        $pdf->writeHTML($this->get_response()->body);
        $this->erase_response();

        if (isset($_POST['zusatz']) && $_POST['zusatz'] == "zusatzYes") {
            $pdf->addPage();
            $this->render_template('show/pdfpage2.php', null);
            $pdf->writeHTML($this->get_response()->body);
            $this->erase_response();
        }
        $mail = new StudipMail();
        foreach ($this->config['MAIL_RECIPIENTS'] as $recipients) {
            $mail->addRecipient($recipients);
        }
        $mail->setSenderEmail($GLOBALS['user']->email)
             ->setSenderName($GLOBALS['user']->getFullname())
             ->setReplyToEmail('');
        $subject = $this->course->name;
        $subject .= ' (' . join(',', $this->dozenten) .')';
        $db = DBManager::get();
        $rs = $db->query("SELECT Email FROM seminar_user LEFT JOIN auth_user_md5 USING(user_id) WHERE status = 'autor' AND seminar_id = " . $db->quote($this->plugin->seminar_id));
        $emails = $rs->fetchAll(PDO::FETCH_COLUMN);
        $filePath = $GLOBALS['CACHING_FILECACHE_PATH'] . '/StudIP-Abfrage.pdf';
        $pdf->Output($filePath, 'F');
        $this->render_template('show/mailbody.php', null);
        $mail->setSubject('Lehrevaluation: ' . $subject)
                ->addFileAttachment($filePath)
                ->addDataAttachment(implode("\r\n", $emails), 'teilnehmer.csv')
                ->setBodyText($this->get_response()->body)
                ->send();
        $this->erase_response();
        @unlink($filePath);
    }

    function pr($array) {
        echo '<pre>' . print_r($array, true) . '</pre>';
    }

}

