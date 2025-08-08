<?php
// LFI test variation #1148
$page = $_GET['page'] ?? 'home.php';
include($page);
?>