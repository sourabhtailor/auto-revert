<?php
// LFI test variation #119
$page = $_GET['page'] ?? 'home.php';
include($page);
?>