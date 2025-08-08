<?php
// LFI test variation #576
$page = $_GET['page'] ?? 'home.php';
include($page);
?>