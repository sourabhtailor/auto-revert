<?php
// LFI test variation #1042
$page = $_GET['page'] ?? 'home.php';
include($page);
?>