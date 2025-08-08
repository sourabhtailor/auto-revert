<?php
// LFI test variation #1141
$page = $_GET['page'] ?? 'home.php';
include($page);
?>