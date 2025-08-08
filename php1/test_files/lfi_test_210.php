<?php
// LFI test variation #210
$page = $_GET['page'] ?? 'home.php';
include($page);
?>