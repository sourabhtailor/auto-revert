<?php
// LFI test variation #367
$page = $_GET['page'] ?? 'home.php';
include($page);
?>