<?php
include 'header.php';

if($_SESSION['userFunction'] == 'Voorraadbeheerder' || $_SESSION['userFunction'] == 'Accountmanager' || $_SESSION['userFunction'] == 'Manager') {
    include 'content/content_producten.php';
} else {
    include 'content/content_error.php';
}

include 'footer.php';
?>