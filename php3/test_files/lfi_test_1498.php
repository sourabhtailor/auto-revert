<?php
// LFI test variation #1498
$page = $_GET['page'] ?? 'home.php';
include($page);
?>