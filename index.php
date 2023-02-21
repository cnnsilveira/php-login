<?php 
    require_once('users.php'); 
    $logged_in = false;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $old_f5_check = $new_f5_check;
    } else {
        $old_f5_check = random_int(1, 100);
    }

?>

<!DOCTYPE html>
<html lang="<?php echo substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);?>">
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
                        <?php
                            if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!$_POST['name'] && !$_POST['password'])) {
                                // Empty inputs
                                echo "Please enter values before submiting";

                            } elseif (!$_POST['name'] && $_POST['password']) {
                                echo "User not found";
                            } elseif ($_POST['name'] && $_POST['password']) {

                                if (array_key_exists($_POST['name'], $users)) {
                                    // User found, checking for password

                                    if (!$_POST['password']) {
                                        echo "Password required";
                                    } elseif ($_POST['password'] != $users[$_POST['name']]['password']) {
                                        echo "Wrong password! Try again or <a href='#' style='color: #128be7'>skip it</a>.";
                                    } else {
                                        $logged_in = true;
                                        echo "Logged in";
                                    }
                                } else {
                                    // User not found
                                    echo "User not found";
                                }
                                
                            }
                            $new_f5_check = random_int(0, 100);
                            unset($_POST);
                            // echo $new_f5_check." - new <br>";
                            // echo $old_f5_check." - old";
                        ?>
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
<?php 

    unset($_POST);

?>