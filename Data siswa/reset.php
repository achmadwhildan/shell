<?php
session_start();

// remove all session variables
session_unset();

// destroy the session
session_destroy();

//untuk redirect file ke sess1.php
header('location: tugas.php');
exit;
?>
