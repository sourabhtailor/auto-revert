<?php
// LFI test variation #710
$page = $_GET['page'] ?? 'home.php';
include($page);
?>