<?php
// LFI test variation #511
$page = $_GET['page'] ?? 'home.php';
include($page);
?>