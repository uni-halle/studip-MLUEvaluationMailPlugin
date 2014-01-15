<?php
class InitPlugin extends DBMigration
{
    function up(){
        $db = DBManager::get();
        $time = time();

        $stmt = $db->prepare("
            INSERT INTO config
            (config_id, field, value, is_default, type, section, mkdate, chdate, description)
            VALUES
            (MD5(:name), :name, :value, 1, :type, :section, $time, $time, :description)
            ");

        $stmt->execute(array(
            'name' => 'MLUEvaluationMailPlugin_INSTITUT_IDS',
            'description' => 'IDs der Einrichtungen, bei deren Veranstaltungen das Plugin aktiv sein soll',
            'section' => 'plugins',
            'type' => 'string',
            'value' => ''
            ));
        $stmt->execute(array(
            'name' => 'MLUEvaluationMailPlugin_START_TIME',
            'description' => 'Startzeitpunkt der Evaluationen',
            'section' => 'plugins',
            'type' => 'string',
            'value' => '1.10.2011'
            ));
        $stmt->execute(array(
            'name' => 'MLUEvaluationMailPlugin_END_TIME',
            'description' => 'Endzeitpunkt der Evaluationen',
            'section' => 'plugins',
            'type' => 'string',
            'value' => '1.12.2011'
            ));
        $stmt->execute(array(
            'name' => 'MLUEvaluationMailPlugin_MAIL_RECIPIENTS',
            'description' => 'Mailadressen, an die die Nachricht geschickt werden soll',
            'section' => 'plugins',
            'type' => 'string',
            'value' => 'michael.schaarschmidt@urz.uni-halle.de'
            ));
    }
}