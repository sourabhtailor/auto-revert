<?php
// LFI test variation #1023
$page = $_GET['page'] ?? 'home.php';
include($page);
?>