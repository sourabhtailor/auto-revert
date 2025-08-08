<?php
// LFI test variation #1382
$page = $_GET['page'] ?? 'home.php';
include($page);
?>