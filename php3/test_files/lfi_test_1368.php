<?php
// LFI test variation #1368
$page = $_GET['page'] ?? 'home.php';
include($page);
?>