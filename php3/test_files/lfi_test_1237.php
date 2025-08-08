<?php
// LFI test variation #1237
$page = $_GET['page'] ?? 'home.php';
include($page);
?>