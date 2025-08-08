<?php
// LFI test variation #1103
$page = $_GET['page'] ?? 'home.php';
include($page);
?>