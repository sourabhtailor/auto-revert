<?php
// LFI test variation #1309
$page = $_GET['page'] ?? 'home.php';
include($page);
?>