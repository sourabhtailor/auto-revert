<?php
// LFI test variation #1314
$page = $_GET['page'] ?? 'home.php';
include($page);
?>