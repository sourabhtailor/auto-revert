<?php
// LFI test variation #424
$page = $_GET['page'] ?? 'home.php';
include($page);
?>