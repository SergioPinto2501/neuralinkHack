<?php
    session_start();
    session_destroy();
    header('Location: ../../employee_zone/index.php');
    exit();
?>