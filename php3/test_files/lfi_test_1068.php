<?php
// LFI test variation #1068
$page = $_GET['page'] ?? 'home.php';
include($page);
?>