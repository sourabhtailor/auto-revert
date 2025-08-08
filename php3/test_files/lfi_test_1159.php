<?php
// LFI test variation #1159
$page = $_GET['page'] ?? 'home.php';
include($page);
?>