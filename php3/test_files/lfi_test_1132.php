<?php
// LFI test variation #1132
$page = $_GET['page'] ?? 'home.php';
include($page);
?>