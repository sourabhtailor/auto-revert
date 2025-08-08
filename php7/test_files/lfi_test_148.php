<?php
// LFI test variation #148
$page = $_GET['page'] ?? 'home.php';
include($page);
?>