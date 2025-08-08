<?php
// LFI test variation #1482
$page = $_GET['page'] ?? 'home.php';
include($page);
?>