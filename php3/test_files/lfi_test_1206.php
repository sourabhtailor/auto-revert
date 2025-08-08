<?php
// LFI test variation #1206
$page = $_GET['page'] ?? 'home.php';
include($page);
?>