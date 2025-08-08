<?php
// LFI test variation #1036
$page = $_GET['page'] ?? 'home.php';
include($page);
?>