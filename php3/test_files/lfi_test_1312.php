<?php
// LFI test variation #1312
$page = $_GET['page'] ?? 'home.php';
include($page);
?>