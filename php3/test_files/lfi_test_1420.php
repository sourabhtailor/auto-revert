<?php
// LFI test variation #1420
$page = $_GET['page'] ?? 'home.php';
include($page);
?>