<?php
// LFI test variation #959
$page = $_GET['page'] ?? 'home.php';
include($page);
?>