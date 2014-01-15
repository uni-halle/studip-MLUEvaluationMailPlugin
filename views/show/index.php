<div class="eval_plugin" style="padding-left:1em;padding-right:1em">

    <div class="container">

        <section id="main" role="main">

            <header>

                <h1>Evaluation</h1>
            </header>


<!--             <p class="alert-message block-message warning" data-alert="alert">
                <a class="close" href="#">�</a>
                F�r das Sommersemester 2012 k�nnen Sie bis zum 27.04.2012 Ihre Lehrveranstaltung �ber Ihren Evaluationsbeauftragten anmelden.</p> -->

            <p>Um eine Evaluation in Ihrer Lehrveranstaltung durchf�hren zu k�nnen, brauchen wir folgende Informationen.</p>


            <form method="post" action="show/send">


                <fieldset class="row">

                    <div class="span4">
                        <legend>Veranstaltung</legend>
                    </div>

                    <div class="span10">

                        <div class="clearfix">
                            <label for="titel">Titel</label>
                            <div class="input">

                                <input class="span7 disabled" id="titel" name="titel" size="30" type="text" value="<?= htmlReady($course->name) ?>" disabled>
                            </div>
                        </div>

                        <div class="clearfix">
                            <label for="art">Art</label>
                            <div class="input">
                                <input class="span7 disabled" id="art" name="art" size="30" value="<?= htmlReady($GLOBALS['SEM_TYPE'][$course->status]['name']) ?>" type="text" disabled>
                            </div>

                        </div>

                        <div class="clearfix">
                            <label for="anzahl">Anzahl der Teilnehmenden</label>
                            <div class="input">
                                <input class="mini disabled" id="anzahl" name="anzahl" size="30" type="text" value="<?= count($this->course->getMembers('autor')) ?>" disabled>
                            </div>
                        </div>

                        <div class="clearfix">

                            <label for="zeit">Tag, Zeit und Ort</label>
                            <div class="input">
                                <input class="span7 disabled" id="zeit" name="zeit" size="30" value="<?= htmlReady($this->course->getDatesExport(array('show_room' => true))) ?>" type="text" disabled>
                            </div>
                        </div>

                        <div class="clearfix">
                            <label for="institut">Institut</label>
                            <div class="input">

                                <input class="span7 disabled" id="institut" name="institut" size="30" type="text" value="<?= htmlReady($institut->name) ?>" disabled>
                            </div> </div>

                        <div class="clearfix">
                            <label for="dozent">Dozent</label>
                            <div class="input">
                                <input class="span7 disabled" id="dozent" name="dozent" size="30" type="text" value="<?= htmlReady(join(', ', $dozenten)); ?>" disabled>
                            </div>

                        </div>

                    </div>

                </fieldset>

                <fieldset class="row">

                    <div class="span4">
                        <legend>Durchf�hrung</legend>
                    </div>

                    <div class="span10">
                        <p>Es besteht die M�glichkeit, die Befragung online durchzuf�hren. Mittels einer TAN werden die
Veranstaltungsteilnehmer/-innen dann zur Evaluation berechtigt.
Sie sollten jedoch in Ihrer Veranstaltung geb�hrend auf die M�glichkeit der Evaluation hinweisen,
um den R�cklauf zu erh�hen.
</p>


                        <div class="clearfix">
                            <label id="durchfuehrung">Durchf�hrung der Evaluation</label>
                            <div class="input">
                                <ul class="inputs-list">
                                    <li>
                                        <label>
                                            <input type="radio" checked="checked" name="durchfuehrung" value="online">
                                            <span>Online-Evaluation (bevorzugt)</span>

                                            <span class="info"
                                                  id="durchfuehrungOnlineBlock">
Die Veranstaltungsteilnehmer/innen erhalten per Email (...@student.uni-halle.de) eine Berechtigung und einen
Link zur Evaluation.<br />
Zeitraum: <strong>7.01.2014 bis 21.01.2014</strong></span>
                                        </label>

                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="durchfuehrung" value="papier">

                                            <span>Papierbasierte Befragung</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="clearfix" id="papierZeitBlock">
                            <label id="papierZeit">Zeitpunkt der Evaluation in der Lehrveranstaltung</label>

                            <div class="input">
                                <ul class="inputs-list">
                                    <li>
                                        <label>
                                            <input type="radio" checked name="papierZeit" value="papierZeit1">
                                            <span>7.01.2014 bis 10.01.2014 (erste Erhebungswoche)</span>
                                        </label>
                                    </li>

                                    <li>
                                        <label>
                                            <input type="radio" name="papierZeit" value="papierZeit2">
                                            <span>13.01.2014 bis 17.01.2014 (zweite Erhebungswoche)</span>
                                        </label>
                                    </li>
                                    <!-- li>
                                        <label>

                                            <input type="radio" name="papierZeit" value="papierZeit3">
                                            <span></span>
                                        </label>
                                    </li -->
                                </ul>
                            </div>
                        </div>

                    </div>


                </fieldset>

                <fieldset class="row">

                    <div class="span4">
                        <legend>Pr�sentation</legend>
                    </div>

                    <div class="span10">

                        <div class="clearfix">
                            <label id="praesentation">Pr�sentation der Ergebnisse</label>

                            <div class="input">
                                <ul class="inputs-list">
                                    <li>
                                        <label>
                                            <input type="radio" checked="" name="praesentation" value="praesiStudip1">
                                            <span>Pr�sentation �ber Stud.IP (bevorzugt)</span>
                                        </label>
                                    </li>

                                    <li>
                                        <label>
                                            <input type="radio" name="praesentation" value="praesiStudip2">
                                            <span>20.01.2014 bis 24.01.2014 (1. Pr�sentationswoche)</span>
                                        </label>
                                    </li>

                                    <li>
                                        <label>
                                            <input type="radio" name="praesentation" value="praesiStudip3">
                                            <span>27.01.2014 bis 31.01.2014 (2. Pr�sentationswoche)</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>

                </fieldset>
                <fieldset class="row">

                    <div class="span4">
                        <legend>Sonstiges</legend>
                    </div>

                    <div class="span10">

                        <div class="clearfix">
                            <label id="sonstiges">Weitere Angaben</label>

                            <div class="input">
                                <ul class="inputs-list">
                                    <li>
                                        <label>
                                            <input type="checkbox" name="fragebogen-englisch" value="fragebogen-englisch">
                                            <span>Fragebogen in englischer Sprache</span>
                                        </label>
                                    </li>

                                    <li>
                                        <label>
                                            <input type="checkbox" name="mehrere-dozenten" value="mehrere-dozenten">
                                            <span>Veranstaltung mit mehreren Dozenten</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>

                </fieldset>
                <fieldset class="row">

                    <div class="span4">
                        <legend>Zusatzfragen</legend>


                    </div>

                    <div class="span10">


                        <p>Die Lehrveranstaltungsevaluation wird mit einem allgemeinen Kernfragebogen durchgef�hrt. Dieser kann durch weitere Fragenkomplexe veranstaltungsspezifisch erweitert werden.
                        <br><a href="<?=$url?>LVEMusterbogen.pdf" target="_blank">[Download Kernfragebogen]</a></p>

                        <div class="clearfix">
                            <label id="zusatz">Zusatzfragen hinzuf�gen?</label>
                            <div class="input">
                                <ul class="inputs-list">
                                    <li>
                                        <label>
                                            <input type="radio" checked="" name="zusatz" value="zusatzNo">

                                            <span>Keine Zusatzfragen</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="zusatz" value="zusatzYes">
                                            <span>Zusatzfragen ausw�hlen</span>
                                        </label>

                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="clearfix" id="zusatzfragenBlock">
                            <p>Bitte geben Sie an welche Fragekomplexe zus�tzlich aufgenommen werden sollen.</p>
                            <label id="zusatzfragen">Zusatzfragen</label>
                            <div class="input">

                                <ul class="inputs-list">
                                    <li>
                                        <label>
                                            <input type="checkbox" name="cb1" value="cb1" />
                                            <span>Tafelbilder</span>

                                            <ol>
                                                <li>Die Tafelbilder sind �bersichtlich und gut gegliedert.</li>
                                            </ol>

                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="cb2" value="cb2" />
                                            <span>Medieneinsatz (Beamer,Overhead etc.)</span>

                                            <ol>
                                                <li>Die eingesetzten Medien (Beamer, Flipchart, Overhead) trugen zum Verst�ndnis der Lehrinhalte bei.</li>

                                                <li>Die PowerPoint-Pr�sentationen/ Folien sind �bersichtlich und gut gegliedert.</li>
                                                <li>Die Anzahl der PowerPoint-Pr�sentationen ist...</li>
                                                <li>Das Tempo der PowerPoint-Pr�sentationen ist...</li>
                                            </ol>
                                        </label>
                                    </li>
                                    <li>

                                        <label>
                                            <input type="checkbox" name="cb3" value="cb3" />
                                            <span>Veranstaltung mit interaktivem, kommunikativem Charakter (z.B. Seminare, �bungen etc.)</span>

                                            <ol>
                                                <li>Es besteht die M�glichkeit sich mit eigenen Wortbeitr�gen in die Veranstaltung einzubringen.</li>
                                                <li>Ich beteilige mich mit Wortbeitr�gen.</li>
                                                <li>Es finden ausreichend Diskussionen statt.</li>

                                                <li>Die Diskussionen in der Veranstaltung sind produktiv.</li>
                                                <li>Diskussionen werden gut geleitet (Anregen von Beitr�gen, Eingehen auf Beitr�ge, Bremsen von Vielrednern)</li>
                                            </ol>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="cb4" value="cb4" />

                                            <span>Skript</span>

                                            <ol>
                                                <li>Das Skript ist ausf�hrlich aufbereitet, um die Inhalte der Lehrveranstaltung verstehen zu k�nnen.</li>
                                                <li>Das Skript ist verst�ndlich.</li>
                                            </ol>
                                        </label>
                                    </li>

                                    <li>
                                        <label>
                                            <input type="checkbox" name="cb5" value="cb5" />
                                            <span>Experimente</span>

                                            <ol>
                                                <li>Die Experimente sind gut nachvollziehbar.</li>
                                                <li>Die Experimente sind gut ausgew�hlt.</li>

                                                <li>Materialien f�r die Experimente sind ausreichend verf�gbar.</li>
                                                <li>Die f�r Experimente eingelante Zeit ist...</li>
                                            </ol>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="cb6" value="cb6" />

                                            <span>�bungsaufgaben</span>

                                            <ol>
                                                <li>Ich bearbeite die �bungsaufgaben.</li>
                                                <li>Die �bungsaufgaben sind hilfreich zum Verst�ndnis des Lernstoffs.</li>
                                                <li>Die �bungsaufgaben werden in der Veranstaltung ausreichen ausgewertet.</li>
                                            </ol>
                                        </label>

                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="cb7" value="cb7" />
                                            <span>Referate</span>

                                            <ol>
                                                <li>Die Vortragsweise und Darbietung der Referate ist ansprechend/gut.</li>
                                                <li>Die Referate der Studierenden sind interessant.</li>

                                                <li>Die Referate sind gut strukturiert.</li>
                                                <li>Die Referate sind verst�ndlich.</li>
                                            </ol>
                                        </label>
                                    </li>
                                    <li>
                                            <span style="font-weight: bold;color: #404040;">E-Learning-Angebote</span>

                                            <ul>
                                                <li><label><input type="checkbox" name="cb8-1" value="cb8-1" />Zusatzfragen zu Vorlesungsaufzeichnung</label></li>
                                                <li><label><input type="checkbox" name="cb8-2" value="cb8-2" />Zusatzfragen zur Lernplattform</label></li>
                                                <li><label><input type="checkbox" name="cb8-3" value="cb8-3" />Zusatzfragen zu E-Portfolio</label></li>

                                                <li><label><input type="checkbox" name="cb8-4" value="cb8-4" />Zusatzfragen zu anderen E-Learning-Angeboten:</label>
                                                <input type="text" name="cb8-4-txt" placeholder="Bitte eintragen!" style="width:100%"></li>

                                            </ul>
                                    </li>
                                </ul>

                            </div>
                        </div>



                    </div>

                </fieldset>

                <div class="row">
                    <div class="actions">
                        <input type="submit" class="btn primary" value="Evaluation beantragen">
                        <button type="reset" class="btn cancel">Abbrechen</button>

                    </div>
                </div>
            </form>

        </section>

    </div>
</div>
