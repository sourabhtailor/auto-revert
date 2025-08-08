<?php
// LFI test variation #251
$page = $_GET['page'] ?? 'home.php';
include($page);
?>