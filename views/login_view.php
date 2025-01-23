<h1>Login</h1>
<?php
require "views/templates/nav.php";
require "models/login_model.php";
?>
<div class="login-layout">
    <div class="login-container">
        <div class="login-box">
            <form action="" method="post">
                <label for="Email"></label>
                <input type="text" name="email" placeholder="E-mail..." required>

                <label for="Passwort"></label>
                <input type="password" name="passwort" placeholder="Passwort..." required>

                <div class="form-footer">
                    <p>Noch kein Konto? <a href="register">&nbsp; Registrieren &nbsp;</a></p>
                    <button class="login-btn" type="submit">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
require "views/templates/footer.php";
?>