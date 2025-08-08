<?php
// LFI test variation #1297
$page = $_GET['page'] ?? 'home.php';
include($page);
?>