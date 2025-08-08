<?php
// LFI test variation #1410
$page = $_GET['page'] ?? 'home.php';
include($page);
?>