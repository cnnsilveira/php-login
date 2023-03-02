<?php 

if (!isset($_SESSION)) {
    session_start();
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Home</title>
    <script src="https://kit.fontawesome.com/13ca972e4c.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/header.js"></script>
    <script src="js/bg-effect.js"></script>
</head>
<body>
    <?php require_once('header.php'); ?>
    <main>
        <article class="centered-flex">
            <div class="bg-container"></div>
            <div class="content-wrap centered-flex">
                <div>
                    <h1>This will be your homepage!</h1>
                    <p>
                        <?php 
                        
                        if (!isset($_SESSION['id'])) {
                            echo "Please log in to see this content.";
                        } else {
                            echo "This is the content you can now see!<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
                        }

                        ?>
                    </p>
                </div>
            </div>
        </article>
    </main>
</body>
</html>