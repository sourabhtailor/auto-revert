<?php
// LFI test variation #1476
$page = $_GET['page'] ?? 'home.php';
include($page);
?>