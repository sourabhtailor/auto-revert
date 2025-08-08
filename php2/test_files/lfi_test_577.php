<?php
// LFI test variation #577
$page = $_GET['page'] ?? 'home.php';
include($page);
?>