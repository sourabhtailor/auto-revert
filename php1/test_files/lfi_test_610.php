<?php
// LFI test variation #610
$page = $_GET['page'] ?? 'home.php';
include($page);
?>