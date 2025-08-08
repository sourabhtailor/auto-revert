<?php
// LFI test variation #1014
$page = $_GET['page'] ?? 'home.php';
include($page);
?>