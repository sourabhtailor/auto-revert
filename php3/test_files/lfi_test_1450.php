<?php
// LFI test variation #1450
$page = $_GET['page'] ?? 'home.php';
include($page);
?>