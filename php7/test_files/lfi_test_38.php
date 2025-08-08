<?php
// LFI test variation #38
$page = $_GET['page'] ?? 'home.php';
include($page);
?>