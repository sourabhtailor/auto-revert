<?php
// LFI test variation #1179
$page = $_GET['page'] ?? 'home.php';
include($page);
?>