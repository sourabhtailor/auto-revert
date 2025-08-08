<?php
// LFI test variation #558
$page = $_GET['page'] ?? 'home.php';
include($page);
?>