<?php
// LFI test variation #626
$page = $_GET['page'] ?? 'home.php';
include($page);
?>