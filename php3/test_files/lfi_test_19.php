<?php
// LFI test variation #19
$page = $_GET['page'] ?? 'home.php';
include($page);
?>