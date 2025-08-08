<?php
// LFI test variation #305
$page = $_GET['page'] ?? 'home.php';
include($page);
?>