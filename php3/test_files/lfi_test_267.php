<?php
// LFI test variation #267
$page = $_GET['page'] ?? 'home.php';
include($page);
?>