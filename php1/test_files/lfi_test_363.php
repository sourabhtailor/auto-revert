<?php
// LFI test variation #363
$page = $_GET['page'] ?? 'home.php';
include($page);
?>