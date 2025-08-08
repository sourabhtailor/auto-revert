<?php
// LFI test variation #1487
$page = $_GET['page'] ?? 'home.php';
include($page);
?>