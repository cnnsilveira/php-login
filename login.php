<?php 

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['id'])) {
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://kit.fontawesome.com/13ca972e4c.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <title>Login</title>
</head>
<body>
    <main>
        <article class="centered-flex">
            <div class="bg-container"></div>
            <div class="login-container centered-flex">
                <div class="login-container-inner">
                    <div class="welcome-wrap">
                        <h1>Welcome!</h1>
                        <p>This is a (still under development) PHP Login Authentication application. You may want to test it using <a href="#" style="color: #128be7">guest</a> for both Username and Password fields or <a href="#" style="color: #ee7c20">register</a>.</p>
                    </div>
                    <div class="form-wrap">
                        <form method="post" action="config/login-auth.php">
                            <input type="text" name="name" placeholder="Username" autocomplete="off">
                            <input type="password" name="password" placeholder="Password" autocomplete="off">
                            <div class="btn-wrap">
                                <input type="submit" value="Log In" class="blue-bg">
                                <a href="#" role="button" class="orange-bg">Register</a>
                            </div>
                        </form>
                    </div>
                    <div class="span-wrap">
                        <span class="message">
                            <?php if (isset($_SESSION['login_status'])) echo $_SESSION['login_status']; ?>
                        </span>
                    </div>
                    <div class="social-icons-wrap">
                        <a href="https://github.com/cnnsilveira" target="_blank"><i class="fa-brands fa-github"></i></a>
                        <a href="https://www.linkedin.com/in/caio-nuness/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </article>
    </main>
</body>
</html>