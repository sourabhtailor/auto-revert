<?php
// LFI test variation #1349
$page = $_GET['page'] ?? 'home.php';
include($page);
?>