<?php
// LFI test variation #1354
$page = $_GET['page'] ?? 'home.php';
include($page);
?>