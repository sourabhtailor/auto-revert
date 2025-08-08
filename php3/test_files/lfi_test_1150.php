<?php
// LFI test variation #1150
$page = $_GET['page'] ?? 'home.php';
include($page);
?>