<?php
// LFI test variation #705
$page = $_GET['page'] ?? 'home.php';
include($page);
?>