<?php
// LFI test variation #123
$page = $_GET['page'] ?? 'home.php';
include($page);
?>