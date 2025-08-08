<?php
// LFI test variation #1097
$page = $_GET['page'] ?? 'home.php';
include($page);
?>