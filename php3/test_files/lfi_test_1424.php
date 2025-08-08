<?php
// LFI test variation #1424
$page = $_GET['page'] ?? 'home.php';
include($page);
?>