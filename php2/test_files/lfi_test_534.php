<?php
// LFI test variation #534
$page = $_GET['page'] ?? 'home.php';
include($page);
?>