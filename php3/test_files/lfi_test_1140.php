<?php
// LFI test variation #1140
$page = $_GET['page'] ?? 'home.php';
include($page);
?>