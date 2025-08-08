<?php
// LFI test variation #1495
$page = $_GET['page'] ?? 'home.php';
include($page);
?>