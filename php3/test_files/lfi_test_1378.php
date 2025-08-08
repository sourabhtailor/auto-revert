<?php
// LFI test variation #1378
$page = $_GET['page'] ?? 'home.php';
include($page);
?>