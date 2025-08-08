<?php
// LFI test variation #1165
$page = $_GET['page'] ?? 'home.php';
include($page);
?>