<?php
// LFI test variation #366
$page = $_GET['page'] ?? 'home.php';
include($page);
?>