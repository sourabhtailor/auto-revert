<?php
// LFI test variation #565
$page = $_GET['page'] ?? 'home.php';
include($page);
?>