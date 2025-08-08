<?php
// LFI test variation #69
$page = $_GET['page'] ?? 'home.php';
include($page);
?>