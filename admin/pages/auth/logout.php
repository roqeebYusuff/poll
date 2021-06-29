<?php
    session_start();
    session_destroy();
    include '../../lib/database.php';

    redirect('login.php');
?>