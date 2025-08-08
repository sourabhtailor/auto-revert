<?php
// LFI test variation #1075
$page = $_GET['page'] ?? 'home.php';
include($page);
?>