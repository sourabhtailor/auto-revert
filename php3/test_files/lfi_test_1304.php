<?php
// LFI test variation #1304
$page = $_GET['page'] ?? 'home.php';
include($page);
?>