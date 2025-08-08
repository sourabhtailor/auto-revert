<?php
// LFI test variation #263
$page = $_GET['page'] ?? 'home.php';
include($page);
?>