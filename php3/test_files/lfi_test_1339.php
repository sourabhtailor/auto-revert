<?php
// LFI test variation #1339
$page = $_GET['page'] ?? 'home.php';
include($page);
?>