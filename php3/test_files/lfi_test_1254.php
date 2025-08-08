<?php
// LFI test variation #1254
$page = $_GET['page'] ?? 'home.php';
include($page);
?>