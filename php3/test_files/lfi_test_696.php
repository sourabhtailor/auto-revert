<?php
// LFI test variation #696
$page = $_GET['page'] ?? 'home.php';
include($page);
?>