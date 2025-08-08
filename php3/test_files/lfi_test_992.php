<?php
// LFI test variation #992
$page = $_GET['page'] ?? 'home.php';
include($page);
?>