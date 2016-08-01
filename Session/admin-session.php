<?php
    session_start();
    if ($_SESSION['level'] =='admin')
    {
        //header('location: inputdata.php');
    }
    else 
    {
        header('location: Login/index.php');
    }
?>