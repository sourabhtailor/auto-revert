<?php
// LFI test variation #1273
$page = $_GET['page'] ?? 'home.php';
include($page);
?>