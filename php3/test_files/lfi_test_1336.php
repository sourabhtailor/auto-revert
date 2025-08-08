<?php
// LFI test variation #1336
$page = $_GET['page'] ?? 'home.php';
include($page);
?>