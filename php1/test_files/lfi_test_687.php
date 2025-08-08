<?php
// LFI test variation #687
$page = $_GET['page'] ?? 'home.php';
include($page);
?>