<?php
// LFI test variation #1453
$page = $_GET['page'] ?? 'home.php';
include($page);
?>