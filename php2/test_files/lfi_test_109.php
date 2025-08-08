<?php
// LFI test variation #109
$page = $_GET['page'] ?? 'home.php';
include($page);
?>