<?php
// LFI test variation #172
$page = $_GET['page'] ?? 'home.php';
include($page);
?>