<?php
// LFI test variation #660
$page = $_GET['page'] ?? 'home.php';
include($page);
?>