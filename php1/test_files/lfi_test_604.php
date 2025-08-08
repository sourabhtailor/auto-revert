<?php
// LFI test variation #604
$page = $_GET['page'] ?? 'home.php';
include($page);
?>