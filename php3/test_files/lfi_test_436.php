<?php
// LFI test variation #436
$page = $_GET['page'] ?? 'home.php';
include($page);
?>