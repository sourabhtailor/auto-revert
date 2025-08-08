<?php
// LFI test variation #1479
$page = $_GET['page'] ?? 'home.php';
include($page);
?>