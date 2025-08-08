<?php
// LFI test variation #260
$page = $_GET['page'] ?? 'home.php';
include($page);
?>