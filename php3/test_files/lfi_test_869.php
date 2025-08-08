<?php
// LFI test variation #869
$page = $_GET['page'] ?? 'home.php';
include($page);
?>