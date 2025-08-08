<?php
// LFI test variation #1494
$page = $_GET['page'] ?? 'home.php';
include($page);
?>