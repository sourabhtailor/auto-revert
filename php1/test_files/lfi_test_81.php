<?php
// LFI test variation #81
$page = $_GET['page'] ?? 'home.php';
include($page);
?>