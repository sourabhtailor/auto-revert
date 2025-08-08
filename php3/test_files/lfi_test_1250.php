<?php
// LFI test variation #1250
$page = $_GET['page'] ?? 'home.php';
include($page);
?>