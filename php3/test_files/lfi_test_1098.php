<?php
// LFI test variation #1098
$page = $_GET['page'] ?? 'home.php';
include($page);
?>