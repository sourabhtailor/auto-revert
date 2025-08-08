<?php
// LFI test variation #1263
$page = $_GET['page'] ?? 'home.php';
include($page);
?>