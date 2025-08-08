<?php
// LFI test variation #200
$page = $_GET['page'] ?? 'home.php';
include($page);
?>