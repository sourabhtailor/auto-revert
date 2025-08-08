<?php
// LFI test variation #79
$page = $_GET['page'] ?? 'home.php';
include($page);
?>