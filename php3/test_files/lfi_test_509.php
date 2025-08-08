<?php
// LFI test variation #509
$page = $_GET['page'] ?? 'home.php';
include($page);
?>