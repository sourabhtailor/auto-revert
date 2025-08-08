<?php
// LFI test variation #554
$page = $_GET['page'] ?? 'home.php';
include($page);
?>