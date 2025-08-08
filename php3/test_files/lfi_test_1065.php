<?php
// LFI test variation #1065
$page = $_GET['page'] ?? 'home.php';
include($page);
?>