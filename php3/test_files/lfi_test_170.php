<?php
// LFI test variation #170
$page = $_GET['page'] ?? 'home.php';
include($page);
?>