<?php
// LFI test variation #1015
$page = $_GET['page'] ?? 'home.php';
include($page);
?>