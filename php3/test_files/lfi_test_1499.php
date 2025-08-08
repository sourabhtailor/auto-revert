<?php
// LFI test variation #1499
$page = $_GET['page'] ?? 'home.php';
include($page);
?>