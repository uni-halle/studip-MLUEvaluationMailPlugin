<br/><br/>

    Sehr geehrte Lehrende,<br/>
    um eine Evaluation in Ihrer Lehrveranstaltung durchführen zu können, brauchen wir folgende Informationen.

    <br/><br/>
    <table width="100%" style="margin-top:15px" cellspacing="0"cellpadding="3">
        <tr>
            <td><b>Titel der Veranstaltung :</b></td>
            <td><?= htmlReady($course->name) ?></td>
        </tr>
        <tr>
            <td><b>Veranstaltungsart :</b></td>
            <td><?= htmlReady($GLOBALS['SEM_TYPE'][$course->status]['name']) ?></td>
        </tr>
        <tr>
            <td><b>Zahl der Teilnehmenden:</b></td>
            <td><?= count($this->course->getMembers('autor')) ?></td>
        </tr>
        <tr>
            <td><b>Tag, Zeit und Ort der Veranstaltung:</b></td>
            <td><?= htmlReady($this->course->getDatesExport(array('link_to_dates' => false, 'show_room' => true))) ?></td>
        </tr>
        <tr>
            <td><b>Institut:</b></td>
            <td><?= htmlReady($institut->name) ?></td>
        </tr>
        <tr>
            <td><b>Dozent:</b></td>
            <td><?= htmlReady(join(', ', $dozenten)); ?></td>
        </tr>
        <tr>
            <td colspan="2"><b>Durchführung der Evaluation:</b></td>
        </tr>
        <tr>
            <td width="50%" align="center" style="border-top:2px solid black;border-bottom:2px solid black;border-right:1px solid black"><b><u>Online-Evaluation (bevorzugt)</u></b></td>
            <td  align="center" style="border-top:2px solid black;border-bottom:2px solid black;border-left:1px solid black"><b><u>Papierbasierte Befragung</u></b></td>
        </tr>
        <tr>
            <td valign ="top"  align="center" style="border-right:1px solid black;border-bottom: 1px solid black"><b>
            <?= ($_POST['durchfuehrung'] == "online" ? "(x)" : "(&nbsp;)") ?>&nbsp;
            Die Veranstaltungsteilnehmer/innen erhalten per Email (...@student.uni-halle.de) eine Berechtigung und einen Link zur Evaluation.</b><br/>
                Zeitraum: 7.1.2014 bis 21.1.2014
            </td>
            <td valign ="top" align="center" style="border-left:1px solid black;border-bottom: 1px solid black"><b>Zeitpunkt der Evaluation in der Lehrveranstaltung:</b><br/>
                <?= ($_POST['durchfuehrung'] == "papier" && $_POST['papierZeit'] == "papierZeit1" ? "(x)" : "(&nbsp;)") ?> 07.01.2014 bis 10.01.2014  (erste Erhebungswoche)<br/>
                oder<br/>
                <?= ($_POST['durchfuehrung'] == "papier" && $_POST['papierZeit'] == "papierZeit2" ? "(x)" : "(&nbsp;)") ?> 13.01.2014 bis 17.01.2014  (zweite Erhebungswoche)<br/>
                <!-- oder<br/>
                <?= ($_POST['durchfuehrung'] == "papier" && $_POST['papierZeit'] == "papierZeit3" ? "(x)" : "(&nbsp;)") ?> 09.01.2012 - 13.01.2012 -->
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center" valign="top" style="border-top:1px solid black;border-bottom:2px solid black;padding:5px">
                <b><u>Präsentation der Ergebnisse</u></b><br/>
                <?= ($_POST['praesentation'] == "praesiStudip2" ? "(x)" : "(&nbsp;)") ?> 20.01.2014 bis 24.01.2014 (1. Präsentationswoche)<br />
                <b>oder</b><br/>
                <?= ($_POST['praesentation'] == "praesiStudip3" ? "(x)" : "(&nbsp;)") ?> 27.01.2014 bis 31.01.2014 (2. Präsentationswoche)<br/>
                <b>oder</b><br/>
                <?= ($_POST['praesentation'] == "praesiStudip1" ? "(x)" : "(&nbsp;)") ?> Präsentation über Stud.IP (bevorzugt)
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center" valign="top" style="border-top:1px solid black;border-bottom:2px solid black;padding:5px">
                <b><u>Weitere Angaben</u></b><br/>
                <?= ($_POST['fragebogen-englisch'] == "fragebogen-englisch" ? "(x)" : "(&nbsp;)") ?> Fragebogen in englischer Sprache<br />
                <br/>
                <?= ($_POST['mehrere-dozenten'] == "mehrere-dozenten" ? "(x)" : "(&nbsp;)") ?> Veranstaltung mit mehreren Dozenten<br/>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center" valign="top" style="border-top:1px solid black;border-bottom:2px solid black;padding:5px">
                <b><u>Zusatzfragen</u></b><br/>
                <?= ($_POST['zusatz'] == "zusatzNo" ? "Nein" : "Ja") ?> <br />
            </td>
        </tr>
    </table>
</div>
