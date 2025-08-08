<?php
// LFI test variation #936
$page = $_GET['page'] ?? 'home.php';
include($page);
?>