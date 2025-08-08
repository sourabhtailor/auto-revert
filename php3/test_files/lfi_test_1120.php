<?php
// LFI test variation #1120
$page = $_GET['page'] ?? 'home.php';
include($page);
?>