<?php
// LFI test variation #1347
$page = $_GET['page'] ?? 'home.php';
include($page);
?>