<?php
// LFI test variation #1209
$page = $_GET['page'] ?? 'home.php';
include($page);
?>