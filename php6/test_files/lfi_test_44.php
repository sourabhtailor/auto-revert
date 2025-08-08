<?php
// LFI test variation #44
$page = $_GET['page'] ?? 'home.php';
include($page);
?>