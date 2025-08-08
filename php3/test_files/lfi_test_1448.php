<?php
// LFI test variation #1448
$page = $_GET['page'] ?? 'home.php';
include($page);
?>