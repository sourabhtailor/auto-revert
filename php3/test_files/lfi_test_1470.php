<?php
// LFI test variation #1470
$page = $_GET['page'] ?? 'home.php';
include($page);
?>