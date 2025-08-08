<?php
// LFI test variation #1398
$page = $_GET['page'] ?? 'home.php';
include($page);
?>