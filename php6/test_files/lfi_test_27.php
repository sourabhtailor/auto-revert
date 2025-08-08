<?php
// LFI test variation #27
$page = $_GET['page'] ?? 'home.php';
include($page);
?>