<?php
// LFI test variation #550
$page = $_GET['page'] ?? 'home.php';
include($page);
?>