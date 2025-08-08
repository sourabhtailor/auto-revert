<?php
// LFI test variation #1214
$page = $_GET['page'] ?? 'home.php';
include($page);
?>