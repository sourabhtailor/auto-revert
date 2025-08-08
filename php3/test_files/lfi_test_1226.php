<?php
// LFI test variation #1226
$page = $_GET['page'] ?? 'home.php';
include($page);
?>