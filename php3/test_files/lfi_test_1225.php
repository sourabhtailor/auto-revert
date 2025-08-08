<?php
// LFI test variation #1225
$page = $_GET['page'] ?? 'home.php';
include($page);
?>