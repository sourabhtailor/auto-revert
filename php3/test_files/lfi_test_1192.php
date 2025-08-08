<?php
// LFI test variation #1192
$page = $_GET['page'] ?? 'home.php';
include($page);
?>