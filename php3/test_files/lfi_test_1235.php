<?php
// LFI test variation #1235
$page = $_GET['page'] ?? 'home.php';
include($page);
?>