<h1>Workout Plan</h1>
<?php
require "views/templates/nav.php";
require "models/workout_model.php";
?>
<div class="workout-layout">
    <div class="plan-container">
        <div class="plan-box">
            <h2>Dein Plan:</h2>
            <?php if(!empty($errors)) { ?>
            <div class="error-container">
                <ul>
                    <?php foreach($errors as $error) { ?>
                    <li><?php echo $error ?></li>
                    <?php } ?>
                    <p>Kehre <a href="home" class="correctdata-link">hier</a>&nbsp;zurück.</p>
                </ul>
            </div>
            <?php } ?>
            <?php if ($plan !== null): ?>
                <ul class="workoutplan">
                    <?php foreach ($plan as $key => $personalplan): ?>
                        <li>
                            <p><?= $key ?>:</p>
                            <ul>
                                <?php foreach ($personalplan as $exercise): ?>
                                    <li>
                                        <?= $exercise["dauer"] . ' - ' . $exercise["Übung"] ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
    <div class="tips-container">
        <div class="tips-box">
            <h2>Hilfreiche Tipps:</h2>
            <ol class="tips">
                <li>
                    <p>Schlafe genug! Training erfordert ausreichenden Schlaf (7-8 Stunden) und Regeneration. Zu frühes Training verhindert Fortschritte.</p>
                </li>
                <li>
                    <p>Geduld & Konsequenz! Selbst wenn es mal nicht so läuft, bleibe konsquent und diszipliniert. Der Erfolgt kommt dann wieder von ganz alleine.</p>
                </li>
                <li>
                    <p>Vergesse das Aufwärmen nicht! Aufwärmsätze oder Übungen können Dich vor schmerzhaften Verletzungen oder Muskelrissen bewahren!</p>
                </li>
                <li>
                    <p>Achte auf genug Regeneration & Erholung! Mit dem Training gibst Du Deinem Muskel nur den Reiz, zu wachsen, der eigentliche Wachstum findet in der Regeneration statt. </p>
                </li>
                <li>
                    <p>Achte stets auf Deine Ernährung! Der Stellenwert der Ernährung liegt bei Trainingszielen wie Muskelaufbau oder Fettabbau bei ca. 70%!</p>
                </li>
                <li>
                    <p>Erstelle Dir einen Trainingsplan! Erstelle einen individuellen Trainingsplan und wechsle Muskelgruppen an den Trainingstagen, um Übertraining zu vermeiden und um dein Training zu optimieren.</p>
                </li>
                <li>
                    <p>Alkohol vermeiden! Alkoholische Getränke haben eine hohe Zahl an schlechten Kalorien, verlangsamen Deinen Stoffwechsel und greifen in Deinen Hormonhaushalt ein! Ebenfalls enthält Alkohol Stoffe, die die Proteinsynthese und den Testosteronspiegel senken!</p>
                </li>
                <li>
                    <p>Überschreite deine Grenzen! Die meisten Menschen stellen sich ihre grenzen im Kopf und hören auf, sobald es schwer ist. </p>
                </li>
            </ol>
        </div>
    </div>
</div>
<?php
require "views/templates/footer.php";
?>