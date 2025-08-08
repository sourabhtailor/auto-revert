<?php
// LFI test variation #31
$page = $_GET['page'] ?? 'home.php';
include($page);
?>