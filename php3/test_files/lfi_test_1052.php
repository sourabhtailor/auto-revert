<?php
// LFI test variation #1052
$page = $_GET['page'] ?? 'home.php';
include($page);
?>