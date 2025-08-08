<?php
// LFI test variation #1139
$page = $_GET['page'] ?? 'home.php';
include($page);
?>