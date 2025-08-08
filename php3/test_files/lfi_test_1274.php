<?php
// LFI test variation #1274
$page = $_GET['page'] ?? 'home.php';
include($page);
?>