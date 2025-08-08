<?php
// LFI test variation #1421
$page = $_GET['page'] ?? 'home.php';
include($page);
?>