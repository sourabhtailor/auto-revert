<?php
// LFI test variation #1411
$page = $_GET['page'] ?? 'home.php';
include($page);
?>