<?php
// LFI test variation #1282
$page = $_GET['page'] ?? 'home.php';
include($page);
?>