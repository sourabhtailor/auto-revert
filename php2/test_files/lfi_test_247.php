<?php
// LFI test variation #247
$page = $_GET['page'] ?? 'home.php';
include($page);
?>