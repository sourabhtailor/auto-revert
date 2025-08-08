<?php
// LFI test variation #1272
$page = $_GET['page'] ?? 'home.php';
include($page);
?>