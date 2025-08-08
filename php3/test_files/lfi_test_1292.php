<?php
// LFI test variation #1292
$page = $_GET['page'] ?? 'home.php';
include($page);
?>