<?php
// LFI test variation #781
$page = $_GET['page'] ?? 'home.php';
include($page);
?>