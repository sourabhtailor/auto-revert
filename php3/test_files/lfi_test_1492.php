<?php
// LFI test variation #1492
$page = $_GET['page'] ?? 'home.php';
include($page);
?>