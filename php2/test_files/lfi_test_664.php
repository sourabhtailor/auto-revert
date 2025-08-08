<?php
// LFI test variation #664
$page = $_GET['page'] ?? 'home.php';
include($page);
?>