<?php
// LFI test variation #1076
$page = $_GET['page'] ?? 'home.php';
include($page);
?>