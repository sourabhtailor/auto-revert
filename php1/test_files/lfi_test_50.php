<?php
// LFI test variation #50
$page = $_GET['page'] ?? 'home.php';
include($page);
?>