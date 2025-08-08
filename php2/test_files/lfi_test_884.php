<?php
// LFI test variation #884
$page = $_GET['page'] ?? 'home.php';
include($page);
?>