<?php
// LFI test variation #1439
$page = $_GET['page'] ?? 'home.php';
include($page);
?>