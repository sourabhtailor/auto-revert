<?php
// LFI test variation #120
$page = $_GET['page'] ?? 'home.php';
include($page);
?>