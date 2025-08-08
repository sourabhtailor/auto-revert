<?php
// LFI test variation #1278
$page = $_GET['page'] ?? 'home.php';
include($page);
?>