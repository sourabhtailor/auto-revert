<?php
// LFI test variation #1483
$page = $_GET['page'] ?? 'home.php';
include($page);
?>