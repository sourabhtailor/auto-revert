<?php
// LFI test variation #1161
$page = $_GET['page'] ?? 'home.php';
include($page);
?>