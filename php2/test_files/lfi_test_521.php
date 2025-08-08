<?php
// LFI test variation #521
$page = $_GET['page'] ?? 'home.php';
include($page);
?>