<?php
// LFI test variation #422
$page = $_GET['page'] ?? 'home.php';
include($page);
?>