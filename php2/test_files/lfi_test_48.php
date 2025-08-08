<?php
// LFI test variation #48
$page = $_GET['page'] ?? 'home.php';
include($page);
?>