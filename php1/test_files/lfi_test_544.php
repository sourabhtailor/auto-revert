<?php
// LFI test variation #544
$page = $_GET['page'] ?? 'home.php';
include($page);
?>