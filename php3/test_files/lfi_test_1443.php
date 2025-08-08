<?php
// LFI test variation #1443
$page = $_GET['page'] ?? 'home.php';
include($page);
?>