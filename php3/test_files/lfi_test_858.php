<?php
// LFI test variation #858
$page = $_GET['page'] ?? 'home.php';
include($page);
?>