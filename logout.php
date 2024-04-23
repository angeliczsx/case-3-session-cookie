<?php
    session_start();
    session_destroy();
    header('Location: halamanLogin.php');
    exit;