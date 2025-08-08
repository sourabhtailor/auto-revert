<?php
// LFI test variation #995
$page = $_GET['page'] ?? 'home.php';
include($page);
?>