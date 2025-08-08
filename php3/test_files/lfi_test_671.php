<?php
// LFI test variation #671
$page = $_GET['page'] ?? 'home.php';
include($page);
?>