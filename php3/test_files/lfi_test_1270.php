<?php
// LFI test variation #1270
$page = $_GET['page'] ?? 'home.php';
include($page);
?>