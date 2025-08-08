<?php
// LFI test variation #1001
$page = $_GET['page'] ?? 'home.php';
include($page);
?>