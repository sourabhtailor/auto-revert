<?php
// LFI test variation #1317
$page = $_GET['page'] ?? 'home.php';
include($page);
?>