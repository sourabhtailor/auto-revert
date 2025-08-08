<?php
// LFI test variation #1387
$page = $_GET['page'] ?? 'home.php';
include($page);
?>