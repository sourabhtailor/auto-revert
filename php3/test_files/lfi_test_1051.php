<?php
// LFI test variation #1051
$page = $_GET['page'] ?? 'home.php';
include($page);
?>