<?php
// LFI test variation #358
$page = $_GET['page'] ?? 'home.php';
include($page);
?>