<?php
// LFI test variation #1472
$page = $_GET['page'] ?? 'home.php';
include($page);
?>