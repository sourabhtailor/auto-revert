<?php
// LFI test variation #1050
$page = $_GET['page'] ?? 'home.php';
include($page);
?>