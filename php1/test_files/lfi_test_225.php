<?php
// LFI test variation #225
$page = $_GET['page'] ?? 'home.php';
include($page);
?>