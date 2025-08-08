<?php
// LFI test variation #1041
$page = $_GET['page'] ?? 'home.php';
include($page);
?>