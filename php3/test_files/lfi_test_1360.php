<?php
// LFI test variation #1360
$page = $_GET['page'] ?? 'home.php';
include($page);
?>