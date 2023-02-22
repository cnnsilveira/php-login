<?php 
    require_once($_SERVER['DOCUMENT_ROOT'].'/config.php');
?>

<!DOCTYPE html>
<html lang="<?php echo $lang;?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Caio Nunes</title>
    <script src="https://kit.fontawesome.com/13ca972e4c.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/bg-effect.js"></script>
    <script src="js/form-fill.js"></script>
</head>
<body>
    <main class="centered-flex">
        <div class="login-left-container"></div>
        <div class="login-right-container centered-flex">
            <div class="right-container-inner">
                <div class="welcome-wrap">
                    <h1>Welcome!</h1>
                    <p>This is a PHP Login Authentication page. You may want to test it using <a href="#" style="color: #ee7c20">guest</a> for both Username and Password fields or just <a href="#" style="color: #128be7">skip it</a> clicking the button below.</p>
                </div>
                <div class="form-wrap">
                    <form method="post">
                        <input type="text" name="name" placeholder="Username" autocomplete="off">
                        <input type="password" name="password" placeholder="Password" autocomplete="off">
                        <div class="btn-wrap">
                            <input type="submit" value="Log In">
                            <a href="#" role="button">Skip</a>
                        </div>
                    </form>
                </div>
                <div class="span-wrap">
                    <span class="message">

                    </span>
                </div>
                <div class="social-icons-wrap">
                    <a href="https://github.com/cnnsilveira" target="_blank"><i class="fa-brands fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/caio-nuness/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>

        </div>
        
    </main>
</body>
</html>