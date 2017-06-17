<?php
include 'header.php';

if($_SESSION['userFunction'] == 'Systeembeheerder') {
    include 'content/content_gebruikers.php';
} else {
    include 'content/content_error.php';
}

include 'footer.php';
?>