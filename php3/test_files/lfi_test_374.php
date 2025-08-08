<?php
// LFI test variation #374
$page = $_GET['page'] ?? 'home.php';
include($page);
?>