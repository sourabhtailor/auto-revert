<?php
// LFI test variation #1379
$page = $_GET['page'] ?? 'home.php';
include($page);
?>