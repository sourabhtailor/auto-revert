<?php
// LFI test variation #1117
$page = $_GET['page'] ?? 'home.php';
include($page);
?>