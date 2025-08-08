<?php
// LFI test variation #921
$page = $_GET['page'] ?? 'home.php';
include($page);
?>