<?php
// LFI test variation #1074
$page = $_GET['page'] ?? 'home.php';
include($page);
?>