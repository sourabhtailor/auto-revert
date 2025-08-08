<?php
// LFI test variation #1004
$page = $_GET['page'] ?? 'home.php';
include($page);
?>