<?php
// LFI test variation #1394
$page = $_GET['page'] ?? 'home.php';
include($page);
?>