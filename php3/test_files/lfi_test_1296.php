<?php
// LFI test variation #1296
$page = $_GET['page'] ?? 'home.php';
include($page);
?>