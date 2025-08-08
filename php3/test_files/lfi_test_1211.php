<?php
// LFI test variation #1211
$page = $_GET['page'] ?? 'home.php';
include($page);
?>