<?php
// LFI test variation #1406
$page = $_GET['page'] ?? 'home.php';
include($page);
?>