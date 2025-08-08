<?php
// LFI test variation #421
$page = $_GET['page'] ?? 'home.php';
include($page);
?>