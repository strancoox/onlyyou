<h1>Home</h1>
<?php
require "views/templates/nav.php";
require "models/home_model.php";
?>
<div class="home-layout">
    <div>
        <img class="left-picture" src="images/dumbels.jpg" alt="Dumbels picture">
    </div>
    <div>
        <img class="right-picture" src="images/gym.jpg" alt="Gym picture">
    </div>
    <div class="data-container">
        <div class="data-box">
            <form action="workout" method="post">
                <label for="age"></label>
                <input type="number" id="age" name="age" min="0" max="100" placeholder="Alter...(min. 16)" required>
                <br><br>

                <label for="weight"></label>
                <input type="number" id="weight" name="weight" step="0.1" min="0" max="300" placeholder="Gewicht in KG..." required>
                <br><br>

                <label for="trainingsgoal1"></label>
                <input type="radio" id="circle1" name="circle" value="1" checked required>
                <span class="circle-label">Abnehmen</span>
                <br>

                <label for="trainingsgoal2"></label>
                <input type="radio" id="trainingsgoal2" name="circle" value="2">
                <span class="circle-label">Gewicht halten</span>
                <br>

                <label for="trainingsgoal3"></label>
                <input type="radio" id="trainingsgoal3" name="circle" value="3">
                <span class="circle-label">Muskeln Aufbauen</span>
                <br><br>

                <label for="trainingcount"></label>
                <select id="trainingcount" name="trainingcount" required>
                    <option value="" disabled selected>Anzahl Trainingstage</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
                <br><br>
                <?php if(!empty($errors)) { ?>
            <div class="error-container">
                <ul>
                    <?php foreach($errors as $error) { ?>
                    <li><?php echo $error ?></li>
                    <?php } ?>
                </ul>
            </div>
            <?php } ?>
                <div class="button-container">
                    <button type="submit">Plan erstellen</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
require "views/templates/footer.php";
?>