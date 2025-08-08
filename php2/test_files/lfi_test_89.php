<?php
// LFI test variation #89
$page = $_GET['page'] ?? 'home.php';
include($page);
?>