<?php

session_start();

if (!isset($_SESSION['user']))
{
    header('Location: login.php');
    exit();
}

include 'header.inc';

?>

<h2>Welcome Page</h2>

<p>
    Welcome,
    <?php echo $_SESSION['user']; ?>!
</p>

<?php

include 'footer.inc';

?>