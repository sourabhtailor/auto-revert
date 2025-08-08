<?php
// LFI test variation #864
$page = $_GET['page'] ?? 'home.php';
include($page);
?>