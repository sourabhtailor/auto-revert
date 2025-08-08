<?php
// LFI test variation #1112
$page = $_GET['page'] ?? 'home.php';
include($page);
?>