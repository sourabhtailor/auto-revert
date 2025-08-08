<?php
// LFI test variation #1219
$page = $_GET['page'] ?? 'home.php';
include($page);
?>