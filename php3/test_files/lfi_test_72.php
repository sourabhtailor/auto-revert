<?php
// LFI test variation #72
$page = $_GET['page'] ?? 'home.php';
include($page);
?>