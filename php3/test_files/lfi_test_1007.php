<?php
// LFI test variation #1007
$page = $_GET['page'] ?? 'home.php';
include($page);
?>