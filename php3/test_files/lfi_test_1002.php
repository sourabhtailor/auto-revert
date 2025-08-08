<?php
// LFI test variation #1002
$page = $_GET['page'] ?? 'home.php';
include($page);
?>