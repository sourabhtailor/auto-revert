<?php
// LFI test variation #1258
$page = $_GET['page'] ?? 'home.php';
include($page);
?>