<?php
// LFI test variation #1126
$page = $_GET['page'] ?? 'home.php';
include($page);
?>