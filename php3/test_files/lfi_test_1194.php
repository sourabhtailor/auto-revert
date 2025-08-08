<?php
// LFI test variation #1194
$page = $_GET['page'] ?? 'home.php';
include($page);
?>