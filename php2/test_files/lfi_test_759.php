<?php
// LFI test variation #759
$page = $_GET['page'] ?? 'home.php';
include($page);
?>