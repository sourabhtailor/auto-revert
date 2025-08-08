<?php
// LFI test variation #1449
$page = $_GET['page'] ?? 'home.php';
include($page);
?>