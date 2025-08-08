<?php
// LFI test variation #1197
$page = $_GET['page'] ?? 'home.php';
include($page);
?>