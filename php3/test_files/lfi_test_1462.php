<?php
// LFI test variation #1462
$page = $_GET['page'] ?? 'home.php';
include($page);
?>