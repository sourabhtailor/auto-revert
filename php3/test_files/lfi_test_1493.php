<?php
// LFI test variation #1493
$page = $_GET['page'] ?? 'home.php';
include($page);
?>