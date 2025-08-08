<?php
// LFI test variation #903
$page = $_GET['page'] ?? 'home.php';
include($page);
?>