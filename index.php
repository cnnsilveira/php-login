<?php require_once('functions.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Caio Nunes</title>
</head>
<body>
    <form method="get">
        <input type="text" name="name">
        <input type="password" name="password">
        <input type="submit">
    </form>
    <?php $check = $_GET['name'] == 'admin' && $_GET['password'] == 'admin'; ?>
    <span style="font-size: 24px; font-weight: 600; color: <?php echo ($check ? 'green' : 'red'); ?>">
        <?php echo ($check ? 'LOGGED IN!' : 'LOGIN FAILED')?>
    </span>

</body>
</html>