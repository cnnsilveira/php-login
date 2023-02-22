<?php 
    require_once($_SERVER['DOCUMENT_ROOT'.'/config.php']);
    if (!$_SESSION['logged_in']) {
        header('Location: '.$_SERVER['DOCUMENT_ROOT']);
    }
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
    <head>
        <title>Test</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <a href="logout.php">Log out</a>
    </body>
</html>