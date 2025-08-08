<?php
// LFI test variation #1427
$page = $_GET['page'] ?? 'home.php';
include($page);
?>