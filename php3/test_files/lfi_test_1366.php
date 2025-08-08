<?php
// LFI test variation #1366
$page = $_GET['page'] ?? 'home.php';
include($page);
?>