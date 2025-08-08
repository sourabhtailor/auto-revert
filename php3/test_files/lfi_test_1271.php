<?php
// LFI test variation #1271
$page = $_GET['page'] ?? 'home.php';
include($page);
?>