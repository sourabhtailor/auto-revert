<?php
// LFI test variation #1323
$page = $_GET['page'] ?? 'home.php';
include($page);
?>