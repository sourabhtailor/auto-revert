<?php
// LFI test variation #1089
$page = $_GET['page'] ?? 'home.php';
include($page);
?>