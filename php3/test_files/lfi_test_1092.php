<?php
// LFI test variation #1092
$page = $_GET['page'] ?? 'home.php';
include($page);
?>