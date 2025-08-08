<?php
// LFI test variation #961
$page = $_GET['page'] ?? 'home.php';
include($page);
?>