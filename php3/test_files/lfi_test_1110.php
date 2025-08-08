<?php
// LFI test variation #1110
$page = $_GET['page'] ?? 'home.php';
include($page);
?>