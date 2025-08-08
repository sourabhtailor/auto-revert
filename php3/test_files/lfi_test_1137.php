<?php
// LFI test variation #1137
$page = $_GET['page'] ?? 'home.php';
include($page);
?>