<?php
// LFI test variation #890
$page = $_GET['page'] ?? 'home.php';
include($page);
?>