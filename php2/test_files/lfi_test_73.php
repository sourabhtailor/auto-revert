<?php
// LFI test variation #73
$page = $_GET['page'] ?? 'home.php';
include($page);
?>