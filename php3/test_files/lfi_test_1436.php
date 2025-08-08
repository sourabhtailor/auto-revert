<?php
// LFI test variation #1436
$page = $_GET['page'] ?? 'home.php';
include($page);
?>