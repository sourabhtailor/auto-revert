<?php
// LFI test variation #127
$page = $_GET['page'] ?? 'home.php';
include($page);
?>