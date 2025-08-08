<?php
// LFI test variation #1390
$page = $_GET['page'] ?? 'home.php';
include($page);
?>