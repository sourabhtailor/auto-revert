<?php
// LFI test variation #1008
$page = $_GET['page'] ?? 'home.php';
include($page);
?>