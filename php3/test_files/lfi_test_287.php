<?php
// LFI test variation #287
$page = $_GET['page'] ?? 'home.php';
include($page);
?>