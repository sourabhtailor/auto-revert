<?php
// LFI test variation #1460
$page = $_GET['page'] ?? 'home.php';
include($page);
?>