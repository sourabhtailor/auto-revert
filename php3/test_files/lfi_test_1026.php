<?php
// LFI test variation #1026
$page = $_GET['page'] ?? 'home.php';
include($page);
?>