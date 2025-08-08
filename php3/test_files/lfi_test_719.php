<?php
// LFI test variation #719
$page = $_GET['page'] ?? 'home.php';
include($page);
?>