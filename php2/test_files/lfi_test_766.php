<?php
// LFI test variation #766
$page = $_GET['page'] ?? 'home.php';
include($page);
?>