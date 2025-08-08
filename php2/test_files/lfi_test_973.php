<?php
// LFI test variation #973
$page = $_GET['page'] ?? 'home.php';
include($page);
?>