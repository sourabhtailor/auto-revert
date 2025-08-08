<?php
// LFI test variation #4
$page = $_GET['page'] ?? 'home.php';
include($page);
?>