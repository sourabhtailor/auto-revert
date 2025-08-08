<?php
// LFI test variation #750
$page = $_GET['page'] ?? 'home.php';
include($page);
?>