<?php
// LFI test variation #40
$page = $_GET['page'] ?? 'home.php';
include($page);
?>