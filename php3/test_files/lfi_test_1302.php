<?php
// LFI test variation #1302
$page = $_GET['page'] ?? 'home.php';
include($page);
?>