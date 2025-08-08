<?php
// LFI test variation #1033
$page = $_GET['page'] ?? 'home.php';
include($page);
?>