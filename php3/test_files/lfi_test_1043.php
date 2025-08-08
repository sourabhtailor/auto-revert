<?php
// LFI test variation #1043
$page = $_GET['page'] ?? 'home.php';
include($page);
?>