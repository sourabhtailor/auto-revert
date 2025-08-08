<?php
// LFI test variation #922
$page = $_GET['page'] ?? 'home.php';
include($page);
?>