<?php
// LFI test variation #460
$page = $_GET['page'] ?? 'home.php';
include($page);
?>