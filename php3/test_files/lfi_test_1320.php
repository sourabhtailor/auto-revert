<?php
// LFI test variation #1320
$page = $_GET['page'] ?? 'home.php';
include($page);
?>