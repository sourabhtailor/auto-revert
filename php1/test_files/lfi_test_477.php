<?php
// LFI test variation #477
$page = $_GET['page'] ?? 'home.php';
include($page);
?>