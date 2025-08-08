<?php
// LFI test variation #387
$page = $_GET['page'] ?? 'home.php';
include($page);
?>