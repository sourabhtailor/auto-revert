<?php
// LFI test variation #1461
$page = $_GET['page'] ?? 'home.php';
include($page);
?>