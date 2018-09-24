<?php
require("config.php");
$checkbox = true;

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    //select data in mySQL
    $query = "SELECT * FROM Users WHERE username='$email' and password='$password'";
    $result = mysqli_query($con, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);

    if ($rows == 1) {
        if (isset($_POST['remember'])) {
            //check checkbox
            setcookie('email', $email, time() + 60 * 60 * 7);
            setcookie('password', $password, time() + 60 * 60 * 7);
            setcookie('checkbox', $checkbox, time() + 60 * 60 * 7);
        } else {
            require("destroy_session.php");
        }
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['checkbox'] = $checkbox;

        header("location: welcome.php");
    } else {
        echo "Email or Password is Invalid.<br> Click here to 
            <a href='index.php'>try again</a>";
    }
} else {
    header("location: index.php");
}
?>