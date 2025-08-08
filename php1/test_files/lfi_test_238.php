<?php
// LFI test variation #238
$page = $_GET['page'] ?? 'home.php';
include($page);
?>