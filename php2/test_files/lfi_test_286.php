<?php
// LFI test variation #286
$page = $_GET['page'] ?? 'home.php';
include($page);
?>