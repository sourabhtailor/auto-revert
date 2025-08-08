<?php
// LFI test variation #71
$page = $_GET['page'] ?? 'home.php';
include($page);
?>