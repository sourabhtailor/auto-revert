<?php
// LFI test variation #84
$page = $_GET['page'] ?? 'home.php';
include($page);
?>