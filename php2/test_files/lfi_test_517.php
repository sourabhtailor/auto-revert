<?php
// LFI test variation #517
$page = $_GET['page'] ?? 'home.php';
include($page);
?>