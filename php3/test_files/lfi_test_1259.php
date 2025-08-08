<?php
// LFI test variation #1259
$page = $_GET['page'] ?? 'home.php';
include($page);
?>