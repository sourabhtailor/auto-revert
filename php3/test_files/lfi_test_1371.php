<?php
// LFI test variation #1371
$page = $_GET['page'] ?? 'home.php';
include($page);
?>