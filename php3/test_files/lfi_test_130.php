<?php
// LFI test variation #130
$page = $_GET['page'] ?? 'home.php';
include($page);
?>