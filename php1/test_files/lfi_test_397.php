<?php
// LFI test variation #397
$page = $_GET['page'] ?? 'home.php';
include($page);
?>