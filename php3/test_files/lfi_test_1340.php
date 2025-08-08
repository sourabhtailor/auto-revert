<?php
// LFI test variation #1340
$page = $_GET['page'] ?? 'home.php';
include($page);
?>