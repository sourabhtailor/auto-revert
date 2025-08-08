<?php
// LFI test variation #1210
$page = $_GET['page'] ?? 'home.php';
include($page);
?>