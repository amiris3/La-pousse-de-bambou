<?php

if (isset($_POST['logout'])) {
    unset($_SESSION['admin']);
    header('Location:index.php');
    die();
}