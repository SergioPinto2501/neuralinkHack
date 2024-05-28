<?php
    session_start();
    echo "Welcome to the employee zone!";
    echo "<br>";
    echo "You are logged in as: " . $_SESSION['email'];
?>