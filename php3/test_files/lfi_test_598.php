<?php
// LFI test variation #598
$page = $_GET['page'] ?? 'home.php';
include($page);
?>