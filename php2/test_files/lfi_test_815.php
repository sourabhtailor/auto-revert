<?php
// LFI test variation #815
$page = $_GET['page'] ?? 'home.php';
include($page);
?>