<?php
// LFI test variation #14
$page = $_GET['page'] ?? 'home.php';
include($page);
?>