<?php
// LFI test variation #379
$page = $_GET['page'] ?? 'home.php';
include($page);
?>