<?php
// LFI test variation #1093
$page = $_GET['page'] ?? 'home.php';
include($page);
?>