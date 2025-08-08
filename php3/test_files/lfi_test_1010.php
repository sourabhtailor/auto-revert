<?php
// LFI test variation #1010
$page = $_GET['page'] ?? 'home.php';
include($page);
?>