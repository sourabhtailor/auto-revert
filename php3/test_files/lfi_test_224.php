<?php
// LFI test variation #224
$page = $_GET['page'] ?? 'home.php';
include($page);
?>