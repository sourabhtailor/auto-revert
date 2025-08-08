<?php
// LFI test variation #611
$page = $_GET['page'] ?? 'home.php';
include($page);
?>