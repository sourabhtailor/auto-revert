<?php
// LFI test variation #361
$page = $_GET['page'] ?? 'home.php';
include($page);
?>