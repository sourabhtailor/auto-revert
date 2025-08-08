<?php
// LFI test variation #1048
$page = $_GET['page'] ?? 'home.php';
include($page);
?>