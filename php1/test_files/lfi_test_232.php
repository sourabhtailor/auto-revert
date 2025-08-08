<?php
// LFI test variation #232
$page = $_GET['page'] ?? 'home.php';
include($page);
?>