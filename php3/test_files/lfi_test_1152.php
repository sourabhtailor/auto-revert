<?php
// LFI test variation #1152
$page = $_GET['page'] ?? 'home.php';
include($page);
?>