<?php
// LFI test variation #194
$page = $_GET['page'] ?? 'home.php';
include($page);
?>