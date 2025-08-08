<?php
// LFI test variation #1054
$page = $_GET['page'] ?? 'home.php';
include($page);
?>