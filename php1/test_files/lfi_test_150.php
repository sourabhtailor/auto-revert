<?php
// LFI test variation #150
$page = $_GET['page'] ?? 'home.php';
include($page);
?>