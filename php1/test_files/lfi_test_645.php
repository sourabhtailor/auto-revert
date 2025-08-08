<?php
// LFI test variation #645
$page = $_GET['page'] ?? 'home.php';
include($page);
?>