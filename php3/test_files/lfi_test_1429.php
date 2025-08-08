<?php
// LFI test variation #1429
$page = $_GET['page'] ?? 'home.php';
include($page);
?>