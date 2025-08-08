<?php
// LFI test variation #1143
$page = $_GET['page'] ?? 'home.php';
include($page);
?>