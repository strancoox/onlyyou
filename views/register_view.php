<h1>Registrieren</h1>
<?php
require "views/templates/nav.php";
?>
<div class="register-layout">
    <div class="register-container">
        <div class="register-box">
            <form action="" method="post">
                <label for="Vorname"></label>
                <input type="text" name="vorname" placeholder="Vorname..." required>
                <br><br>

                <label for="Nachname"></label>
                <input type="text" name="nachname" placeholder="Nachname..." required>
                <br><br>

                <label for="Email"></label>
                <input type="text" name="email" placeholder="Email..." required>
                <br><br>

                <label for="Passwort"></label>
                <input type="text" name="password" placeholder="Passwort..." required>
                <br><br>

                <div class="form-footer">
                    <p>Sie haben bereits ein Konto? <a href="login">&nbsp; Login &nbsp;</a></p>
                    <button class="register-btn" type="submit">Registrieren</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
require "views/templates/footer.php";
?>