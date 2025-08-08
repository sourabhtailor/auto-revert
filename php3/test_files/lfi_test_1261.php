<?php
// LFI test variation #1261
$page = $_GET['page'] ?? 'home.php';
include($page);
?>