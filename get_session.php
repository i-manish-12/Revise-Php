<?php
session_start();

echo "Hii ".$_SESSION['name'];
echo "<br>Your UID is ".$_SESSION['uid'];
echo "<br>";

// echo "<input type='submit' value='Log out' onclick='logout()''>";

    session_unset();
    session_destroy();
    echo "logged out";
    // header("Location:session.php");
?>