<?php
// LFI test variation #791
$page = $_GET['page'] ?? 'home.php';
include($page);
?>