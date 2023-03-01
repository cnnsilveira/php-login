<?php require_once('protect.php'); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <span>Welcome back, <?php echo $_SESSION['name'];?></span>
        <a href="logout.php" style="color: #000;">Log out</a>
    </body>
</html>