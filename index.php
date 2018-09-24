<!DOCTYPE html>
<html>
<head>
    <title>Login PHP</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div id="boxForm">
        <h2 id="title">My Login Form</h2>
        <form method="post" action="validate.php">
            <input class='text' type='text' name='email' id="email" placeholder='Email'>
            <br>
            <input class='text' id='password'  type='password'  name="password" placeholder='Password'>
            <br>
            <input id='check' name='remember' type='checkbox'> <label>Remember me</label>
            <br>
            <input class='button' type='submit' value="Login" name="login">
        </form>
    </div>
</body>

<?php
    if(isset($_COOKIE['email']) and isset($_COOKIE['password']) and isset($_COOKIE['checkbox'])){
        $email = $_COOKIE['email'];
        $password = $_COOKIE['password'];
        $checkbox = $_COOKIE['checkbox'];
        echo "<script>
                document.getElementById('email').value = '$email';
                document.getElementById('password').value = '$password';
                document.getElementById('check').checked = '$checkbox';
            </script>";
    }
?>
</html>