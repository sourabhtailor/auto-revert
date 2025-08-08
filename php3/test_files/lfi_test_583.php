<?php
// LFI test variation #583
$page = $_GET['page'] ?? 'home.php';
include($page);
?>