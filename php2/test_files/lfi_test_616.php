<?php
// LFI test variation #616
$page = $_GET['page'] ?? 'home.php';
include($page);
?>