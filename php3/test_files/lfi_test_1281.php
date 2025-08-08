<?php
// LFI test variation #1281
$page = $_GET['page'] ?? 'home.php';
include($page);
?>