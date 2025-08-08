<?php
// LFI test variation #1224
$page = $_GET['page'] ?? 'home.php';
include($page);
?>