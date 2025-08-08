<?php
// LFI test variation #833
$page = $_GET['page'] ?? 'home.php';
include($page);
?>