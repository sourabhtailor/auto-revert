<?php
// LFI test variation #1293
$page = $_GET['page'] ?? 'home.php';
include($page);
?>