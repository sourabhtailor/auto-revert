<?php
// LFI test variation #1396
$page = $_GET['page'] ?? 'home.php';
include($page);
?>