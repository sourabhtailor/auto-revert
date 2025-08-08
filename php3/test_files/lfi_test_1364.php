<?php
// LFI test variation #1364
$page = $_GET['page'] ?? 'home.php';
include($page);
?>