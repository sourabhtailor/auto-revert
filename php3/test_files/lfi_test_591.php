<?php
// LFI test variation #591
$page = $_GET['page'] ?? 'home.php';
include($page);
?>