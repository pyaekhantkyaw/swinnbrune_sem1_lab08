<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$token = $_POST['token'];

if ($username == 'PyaekhantKyaw' && $password == '106628822')
{
    $_SESSION['user'] = $username;

    header('Location: welcome.php');
    exit();
}
else
{
    echo "Invalid Login. <a href='login.php'>Try Again</a>";
}

?>
