<?php
// LFI test variation #491
$page = $_GET['page'] ?? 'home.php';
include($page);
?>