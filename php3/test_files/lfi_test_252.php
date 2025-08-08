<?php
// LFI test variation #252
$page = $_GET['page'] ?? 'home.php';
include($page);
?>