<?php
// LFI test variation #1121
$page = $_GET['page'] ?? 'home.php';
include($page);
?>