<?php
// LFI test variation #350
$page = $_GET['page'] ?? 'home.php';
include($page);
?>