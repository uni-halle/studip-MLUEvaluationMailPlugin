<style>
ul{
    margin: 0px;
    padding:0px;
}
ul li {
    list-style: none inside;
}
ul li ul{
    padding:5px 0px 0px 30px;
}
ul li span{
    color:red;
    text-decoration: underline;
    font-weight: bold;
}
</style>
<br/>
    <ul style="list-style-type:none;list-style-position: inside;padding:0px;margin:0px">
        <li>
            <?= ($_POST['cb1']?"[x]":"[&nbsp;]") ?> <span>Tafelbilder ?</span>
            <ul>
                <li>Die Tafelbilder sind �bersichtlich und gut gegliedert.</li>
            </ul>
        </li>
        <li>
            <?= ($_POST['cb2']?"[x]":"[&nbsp;]") ?> <span>Medieneinsatz (Beamer,Overhead etc.)?</span>
            <ul>
                <li>Die eingesetzten Medien (Beamer, Flipchart, Overhead) trugen zum Verst�ndnis der Lehrinhalte bei.</li>
                <li>Die PowerPoint-Pr�sentationen/ Folien sind �bersichtlich und gut gegliedert.</li>
                <li>Die Anzahl der PowerPoint-Pr�sentationen ist...</li>
                <li>Das Tempo der PowerPoint-Pr�sentationen ist...</li>
            </ul>
        </li>
        <li>
            <?= ($_POST['cb3']?"[x]":"[&nbsp;]") ?> <span>Veranstaltung mit interaktivem, kommunikativem Charakter (z.B. Seminare, �bungen etc.) ?</span>
            <ul>
                <li>Es besteht die M�glichkeit sich mit eigenen Wortbeitr�gen in die Veranstaltung einzubringen.</li>
                <li>Ich beteilige mich mit Wortbeitr�gen.</li>
                <li>Es finden ausreichend Diskussionen statt.</li>
                <li>Die Diskussionen in der Veranstaltung sind produktiv.</li>
                <li>Diskussionen werden gut geleitet (Anregen von Beitr�gen, Eingehen auf Beitr�ge, Bremsen von Vielrednern)</li>
            </ul>
        </li>
        <li>
            <?= ($_POST['cb4']?"[x]":"[&nbsp;]") ?> <span>Skript?</span>
            <ul>
                <li>Das Skript ist ausf�hrlich aufbereitet, um die Inhalte der Lehrveranstaltung verstehen zu k�nnen.</li>
                <li>Das Skript ist verst�ndlich.</li>
            </ul>
        </li>
        <li>
            <?= ($_POST['cb5']?"[x]":"[&nbsp;]") ?> <span>Experimente?</span>
            <ul>
                <li>Die Experimente sind gut nachvollziehbar.</li>
                <li>Die Experimente sind gut ausgew�hlt.</li>
                <li>Materialien f�r die Experimente sind ausreichend verf�bar.</li>
                <li>Die f�r Experimente eingelante Zeit ist...</li>
            </ul>
        </li>
        <li>
            <?= ($_POST['cb6']?"[x]":"[&nbsp;]") ?> <span>�bungsaufgaben?</span>
            <ul>
                <li>Ich bearbeite die �bungsaufgaben.</li>
                <li>Die �bungsaufgaben sind hilfreich zum Verst�ndnis des Lernstoffs.</li>
                <li>Die �bungsaufgaben werden in der Veranstaltung ausreichen ausgewertet.</li>
            </ul>
        </li>
        <li>
            <?= ($_POST['cb7']?"[x]":"[&nbsp;]") ?> <span>Referate?</span>
            <ul>
                <li>Die Vortragsweise und Darbietung der Referate ist ansprechend/gut.</li>
                <li>Die Referate der Studierenden sind interessant.</li>
                <li>Die Referate sind gut strukturiert.</li>
                <li>Die Referate sind verst�ndlich.</li>
            </ul>
        </li>
        <li>
            <span>E-Learning-Angebote?</span>
            <ul>
                <li><?= ($_POST['cb8-1']?"[x]":"[&nbsp;]") ?> Zusatzfragen zu Vorlesungsaufzeichnung</li>
                <li><?= ($_POST['cb8-2']?"[x]":"[&nbsp;]") ?> Zusatzfragen zur Lernplattform</li>
                <li><?= ($_POST['cb8-3']?"[x]":"[&nbsp;]") ?> Zusatzfragen zu E-Portfolio</li>
                <li><?= ($_POST['cb8-4']?"[x]":"[&nbsp;]") ?> Zusatzfragen zu anderen E-Learning-Angeboten:
                <br>
                <?=htmlReady($_POST['cb8-4-txt'])?>
                </li>
            </ul>
        </li>
    </ul>
</div>