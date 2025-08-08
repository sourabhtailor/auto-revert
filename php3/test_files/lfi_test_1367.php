<?php
// LFI test variation #1367
$page = $_GET['page'] ?? 'home.php';
include($page);
?>