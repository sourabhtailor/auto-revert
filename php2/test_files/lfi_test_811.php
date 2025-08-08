<?php
// LFI test variation #811
$page = $_GET['page'] ?? 'home.php';
include($page);
?>