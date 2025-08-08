<?php
// LFI test variation #99
$page = $_GET['page'] ?? 'home.php';
include($page);
?>