<?php
// LFI test variation #1060
$page = $_GET['page'] ?? 'home.php';
include($page);
?>