<?php
// LFI test variation #1149
$page = $_GET['page'] ?? 'home.php';
include($page);
?>