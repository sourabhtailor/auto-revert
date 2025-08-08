<?php
// LFI test variation #1058
$page = $_GET['page'] ?? 'home.php';
include($page);
?>