<?php
// LFI test variation #1024
$page = $_GET['page'] ?? 'home.php';
include($page);
?>