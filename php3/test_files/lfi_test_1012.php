<?php
// LFI test variation #1012
$page = $_GET['page'] ?? 'home.php';
include($page);
?>