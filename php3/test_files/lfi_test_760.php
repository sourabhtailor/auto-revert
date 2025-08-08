<?php
// LFI test variation #760
$page = $_GET['page'] ?? 'home.php';
include($page);
?>