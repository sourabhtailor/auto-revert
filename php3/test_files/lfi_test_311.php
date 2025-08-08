<?php
// LFI test variation #311
$page = $_GET['page'] ?? 'home.php';
include($page);
?>