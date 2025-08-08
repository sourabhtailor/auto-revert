<?php
// LFI test variation #98
$page = $_GET['page'] ?? 'home.php';
include($page);
?>