<?php
// LFI test variation #475
$page = $_GET['page'] ?? 'home.php';
include($page);
?>