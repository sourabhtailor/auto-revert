<?php
// LFI test variation #1101
$page = $_GET['page'] ?? 'home.php';
include($page);
?>