<?php
// LFI test variation #395
$page = $_GET['page'] ?? 'home.php';
include($page);
?>