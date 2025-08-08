<?php
// LFI test variation #674
$page = $_GET['page'] ?? 'home.php';
include($page);
?>