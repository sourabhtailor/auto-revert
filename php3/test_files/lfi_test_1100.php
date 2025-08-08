<?php
// LFI test variation #1100
$page = $_GET['page'] ?? 'home.php';
include($page);
?>