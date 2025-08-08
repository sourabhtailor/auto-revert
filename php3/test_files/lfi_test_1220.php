<?php
// LFI test variation #1220
$page = $_GET['page'] ?? 'home.php';
include($page);
?>