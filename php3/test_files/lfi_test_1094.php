<?php
// LFI test variation #1094
$page = $_GET['page'] ?? 'home.php';
include($page);
?>