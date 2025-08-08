<?php
// LFI test variation #1392
$page = $_GET['page'] ?? 'home.php';
include($page);
?>