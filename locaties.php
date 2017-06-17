<?php
include 'header.php';

if($_SESSION['userFunction'] == 'Manager' || $_SESSION['userFunction'] == 'Accountmanager') {
    include 'content/content_locaties.php';
} else {
    include 'content/content_error.php';
}

include 'footer.php';
?>