<?php
// LFI test variation #1465
$page = $_GET['page'] ?? 'home.php';
include($page);
?>