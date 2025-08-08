<?php
// LFI test variation #1227
$page = $_GET['page'] ?? 'home.php';
include($page);
?>