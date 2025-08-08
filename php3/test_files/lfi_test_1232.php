<?php
// LFI test variation #1232
$page = $_GET['page'] ?? 'home.php';
include($page);
?>