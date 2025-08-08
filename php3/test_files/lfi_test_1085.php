<?php
// LFI test variation #1085
$page = $_GET['page'] ?? 'home.php';
include($page);
?>