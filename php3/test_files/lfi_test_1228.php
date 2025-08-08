<?php
// LFI test variation #1228
$page = $_GET['page'] ?? 'home.php';
include($page);
?>