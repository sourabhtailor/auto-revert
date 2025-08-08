<?php
// LFI test variation #35
$page = $_GET['page'] ?? 'home.php';
include($page);
?>