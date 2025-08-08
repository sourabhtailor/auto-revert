<?php
// LFI test variation #46
$page = $_GET['page'] ?? 'home.php';
include($page);
?>