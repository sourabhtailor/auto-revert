<?php
// LFI test variation #603
$page = $_GET['page'] ?? 'home.php';
include($page);
?>