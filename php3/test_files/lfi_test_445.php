<?php
// LFI test variation #445
$page = $_GET['page'] ?? 'home.php';
include($page);
?>