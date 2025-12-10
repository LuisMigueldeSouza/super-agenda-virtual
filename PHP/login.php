<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <main>
        <section id="loginbox">
            <div>
                <form method=post action="login.php">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" required>
                    
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required minlength=8 maxlength=64>

                    <input type="submit" value="Entrar">
                </form>
            </div>
        </section>
    </main>
</body>
</html>

<?php
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    echo $password;

   



?>