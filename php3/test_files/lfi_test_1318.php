<?php
// LFI test variation #1318
$page = $_GET['page'] ?? 'home.php';
include($page);
?>