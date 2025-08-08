<?php
// LFI test variation #1173
$page = $_GET['page'] ?? 'home.php';
include($page);
?>