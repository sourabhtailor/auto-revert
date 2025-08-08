<?php
// LFI test variation #763
$page = $_GET['page'] ?? 'home.php';
include($page);
?>