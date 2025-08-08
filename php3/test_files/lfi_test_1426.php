<?php
// LFI test variation #1426
$page = $_GET['page'] ?? 'home.php';
include($page);
?>