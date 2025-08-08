<?php
// LFI test variation #322
$page = $_GET['page'] ?? 'home.php';
include($page);
?>