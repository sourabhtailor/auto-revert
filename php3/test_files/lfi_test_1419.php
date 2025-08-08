<?php
// LFI test variation #1419
$page = $_GET['page'] ?? 'home.php';
include($page);
?>