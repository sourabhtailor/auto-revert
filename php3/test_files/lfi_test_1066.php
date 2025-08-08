<?php
// LFI test variation #1066
$page = $_GET['page'] ?? 'home.php';
include($page);
?>