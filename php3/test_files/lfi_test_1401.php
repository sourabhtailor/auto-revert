<?php
// LFI test variation #1401
$page = $_GET['page'] ?? 'home.php';
include($page);
?>