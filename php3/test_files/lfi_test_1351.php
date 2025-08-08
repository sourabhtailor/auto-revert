<?php
// LFI test variation #1351
$page = $_GET['page'] ?? 'home.php';
include($page);
?>