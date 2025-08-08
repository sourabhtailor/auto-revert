<?php
// LFI test variation #1109
$page = $_GET['page'] ?? 'home.php';
include($page);
?>