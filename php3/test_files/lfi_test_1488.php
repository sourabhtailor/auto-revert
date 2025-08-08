<?php
// LFI test variation #1488
$page = $_GET['page'] ?? 'home.php';
include($page);
?>