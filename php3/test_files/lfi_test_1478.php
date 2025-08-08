<?php
// LFI test variation #1478
$page = $_GET['page'] ?? 'home.php';
include($page);
?>