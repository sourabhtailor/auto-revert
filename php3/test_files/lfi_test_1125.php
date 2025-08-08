<?php
// LFI test variation #1125
$page = $_GET['page'] ?? 'home.php';
include($page);
?>