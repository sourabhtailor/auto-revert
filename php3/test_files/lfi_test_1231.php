<?php
// LFI test variation #1231
$page = $_GET['page'] ?? 'home.php';
include($page);
?>