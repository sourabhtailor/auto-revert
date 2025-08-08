<?php
// LFI test variation #359
$page = $_GET['page'] ?? 'home.php';
include($page);
?>