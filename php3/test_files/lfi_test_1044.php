<?php
// LFI test variation #1044
$page = $_GET['page'] ?? 'home.php';
include($page);
?>