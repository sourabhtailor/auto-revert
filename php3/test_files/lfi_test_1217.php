<?php
// LFI test variation #1217
$page = $_GET['page'] ?? 'home.php';
include($page);
?>