<?php
// LFI test variation #1160
$page = $_GET['page'] ?? 'home.php';
include($page);
?>