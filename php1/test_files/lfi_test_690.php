<?php
// LFI test variation #690
$page = $_GET['page'] ?? 'home.php';
include($page);
?>