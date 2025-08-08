<?php
// LFI test variation #41
$page = $_GET['page'] ?? 'home.php';
include($page);
?>