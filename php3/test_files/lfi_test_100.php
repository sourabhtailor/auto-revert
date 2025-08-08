<?php
// LFI test variation #100
$page = $_GET['page'] ?? 'home.php';
include($page);
?>