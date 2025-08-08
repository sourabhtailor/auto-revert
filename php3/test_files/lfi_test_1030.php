<?php
// LFI test variation #1030
$page = $_GET['page'] ?? 'home.php';
include($page);
?>