<?php
// LFI test variation #748
$page = $_GET['page'] ?? 'home.php';
include($page);
?>