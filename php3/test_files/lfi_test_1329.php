<?php
// LFI test variation #1329
$page = $_GET['page'] ?? 'home.php';
include($page);
?>