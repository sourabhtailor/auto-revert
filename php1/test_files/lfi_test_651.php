<?php
// LFI test variation #651
$page = $_GET['page'] ?? 'home.php';
include($page);
?>