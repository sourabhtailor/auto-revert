<?php
// LFI test variation #1114
$page = $_GET['page'] ?? 'home.php';
include($page);
?>