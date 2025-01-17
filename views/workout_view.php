<h1>Workout Plan</h1>
<?php
require "views/templates/nav.php";
require "models/workout_model.php";

if ($plan === null) {
} else {
}
?>
<div class="workout-layout">
    <div class="plan-container">
        <div class="plan-box">
            <h2>Dein Plan:</h2>
            <?php if ($plan !== null): ?>
                <ul class="workoutplan">
                    <?php foreach ($plan as $key => $personalplan): ?>
                        <li>
                            <?= $key . ': ' .  $personalplan[0]["dauer"] . ' ' . $personalplan[0]["Übung"] ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
    <div class="tips-container">
        <div class="tips-box">
            <h2>Tipps:</h2>
            <ul class="tips">
                <li>
                    
                </li>
            </ul>
        </div>
    </div>
</div>
<?php
require "views/templates/footer.php";
?>