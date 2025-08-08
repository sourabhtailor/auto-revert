<?php
// LFI test variation #3
$page = $_GET['page'] ?? 'home.php';
include($page);
?>