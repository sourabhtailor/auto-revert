<?php
// LFI test variation #1221
$page = $_GET['page'] ?? 'home.php';
include($page);
?>