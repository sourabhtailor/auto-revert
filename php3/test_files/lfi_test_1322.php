<?php
// LFI test variation #1322
$page = $_GET['page'] ?? 'home.php';
include($page);
?>