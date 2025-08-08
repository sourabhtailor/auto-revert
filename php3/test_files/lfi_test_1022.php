<?php
// LFI test variation #1022
$page = $_GET['page'] ?? 'home.php';
include($page);
?>