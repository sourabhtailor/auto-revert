<?php
// LFI test variation #1338
$page = $_GET['page'] ?? 'home.php';
include($page);
?>