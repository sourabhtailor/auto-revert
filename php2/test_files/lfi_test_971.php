<?php
// LFI test variation #971
$page = $_GET['page'] ?? 'home.php';
include($page);
?>