<?php require 'header.php'; ?>

<form action="loginController.php" method="post">
    <input type="hidden" name="type" value="register">
    <div class="form-group">
        <label for="username">username</label><br>
        <input type="text" name="username" id="username">
    </div>

    <div class="form-group">
        <label for="email">email</label><br>
        <input type="email" name="email" id="email">
    </div>

    <div class="form-group">
        <label for="password">password</label><br>
        <input type="password" name="password" id="password">
    </div>

    <div class="form-group">
        <label for="password_confirm">Please confirm your password</label><br>
        <input type="password" name="password_confirm" id="password_confirm">
    </div>

    <input type="submit" value="Register">
</form>

<?php require 'footer.php'; ?>

