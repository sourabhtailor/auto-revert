<?php
// LFI test variation #1491
$page = $_GET['page'] ?? 'home.php';
include($page);
?>