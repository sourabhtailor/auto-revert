<?php
// LFI test variation #1384
$page = $_GET['page'] ?? 'home.php';
include($page);
?>