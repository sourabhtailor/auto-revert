<?php
// LFI test variation #1418
$page = $_GET['page'] ?? 'home.php';
include($page);
?>