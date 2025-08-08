<?php
// LFI test variation #332
$page = $_GET['page'] ?? 'home.php';
include($page);
?>