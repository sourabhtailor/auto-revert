<?php
// LFI test variation #353
$page = $_GET['page'] ?? 'home.php';
include($page);
?>