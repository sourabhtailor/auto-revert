<?php
// LFI test variation #1106
$page = $_GET['page'] ?? 'home.php';
include($page);
?>