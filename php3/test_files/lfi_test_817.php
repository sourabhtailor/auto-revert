<?php
// LFI test variation #817
$page = $_GET['page'] ?? 'home.php';
include($page);
?>