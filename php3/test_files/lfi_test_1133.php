<?php
// LFI test variation #1133
$page = $_GET['page'] ?? 'home.php';
include($page);
?>