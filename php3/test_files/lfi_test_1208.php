<?php
// LFI test variation #1208
$page = $_GET['page'] ?? 'home.php';
include($page);
?>