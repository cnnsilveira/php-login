<?php 

require_once('connection.php');

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST['name']) || isset($_POST['password'])) {

    if (strlen($_POST['name']) == 0) {

        $_SESSION['login_status'] = 'Please fill the username field.';

        header('Location: login.php');

    } else if (strlen($_POST['password']) == 0) {

        $_SESSION['login_status'] = 'Please fill the password field.';
        
        header('Location: login.php');

    } else {

        $name = $mysqli->real_escape_string($_POST['name']);
        $password = $mysqli->real_escape_string($_POST['password']);

        $sql_code = "SELECT * FROM users WHERE username = '$name' AND password = '$password'";
        $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

        if ($sql_query->num_rows) {

            $user = $sql_query->fetch_assoc();

            $_SESSION['id'] = $user['id'];
            $_SESSION['name'] = $user['name'];

            header('Location: dashboard.php');

        } else {

            $_SESSION['login_status'] = 'Wrong username or password.';

            header('Location: login.php');

        }

    }
    

}

?>