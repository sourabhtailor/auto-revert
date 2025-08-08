<?php
// LFI test variation #1497
$page = $_GET['page'] ?? 'home.php';
include($page);
?>