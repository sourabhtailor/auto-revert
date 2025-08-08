<?php
// LFI test variation #1311
$page = $_GET['page'] ?? 'home.php';
include($page);
?>