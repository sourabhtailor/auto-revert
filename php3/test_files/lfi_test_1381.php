<?php
// LFI test variation #1381
$page = $_GET['page'] ?? 'home.php';
include($page);
?>