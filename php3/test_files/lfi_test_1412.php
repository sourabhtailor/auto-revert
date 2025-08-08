<?php
// LFI test variation #1412
$page = $_GET['page'] ?? 'home.php';
include($page);
?>