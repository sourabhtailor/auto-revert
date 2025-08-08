<?php
// LFI test variation #1190
$page = $_GET['page'] ?? 'home.php';
include($page);
?>