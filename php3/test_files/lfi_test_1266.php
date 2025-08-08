<?php
// LFI test variation #1266
$page = $_GET['page'] ?? 'home.php';
include($page);
?>