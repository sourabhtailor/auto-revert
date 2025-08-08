<?php
// LFI test variation #1045
$page = $_GET['page'] ?? 'home.php';
include($page);
?>