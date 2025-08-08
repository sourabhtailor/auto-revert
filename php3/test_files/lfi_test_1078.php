<?php
// LFI test variation #1078
$page = $_GET['page'] ?? 'home.php';
include($page);
?>