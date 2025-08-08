<?php
// LFI test variation #83
$page = $_GET['page'] ?? 'home.php';
include($page);
?>