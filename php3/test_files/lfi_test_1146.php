<?php
// LFI test variation #1146
$page = $_GET['page'] ?? 'home.php';
include($page);
?>