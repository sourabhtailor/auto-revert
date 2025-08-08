<?php
// LFI test variation #481
$page = $_GET['page'] ?? 'home.php';
include($page);
?>