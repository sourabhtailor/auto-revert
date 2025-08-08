<?php
// LFI test variation #1251
$page = $_GET['page'] ?? 'home.php';
include($page);
?>