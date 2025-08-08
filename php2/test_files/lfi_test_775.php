<?php
// LFI test variation #775
$page = $_GET['page'] ?? 'home.php';
include($page);
?>