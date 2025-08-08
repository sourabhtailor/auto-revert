<?php
// LFI test variation #8
$page = $_GET['page'] ?? 'home.php';
include($page);
?>