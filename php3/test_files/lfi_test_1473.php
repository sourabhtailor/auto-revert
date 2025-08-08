<?php
// LFI test variation #1473
$page = $_GET['page'] ?? 'home.php';
include($page);
?>