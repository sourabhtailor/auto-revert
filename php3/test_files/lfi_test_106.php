<?php
// LFI test variation #106
$page = $_GET['page'] ?? 'home.php';
include($page);
?>