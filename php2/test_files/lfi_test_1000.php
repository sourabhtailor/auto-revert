<?php
// LFI test variation #1000
$page = $_GET['page'] ?? 'home.php';
include($page);
?>