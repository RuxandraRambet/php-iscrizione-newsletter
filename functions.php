<?php
$success = null;
if (!empty($_GET['email'])) {
    $email = $_GET['email'];
    if (stripos($email, '.') !== false && stripos($email, '@') !== false) {
        $success = true;
    }else {
        $success= false;
    }
}
?>