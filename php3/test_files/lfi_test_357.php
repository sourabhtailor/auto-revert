<?php
// LFI test variation #357
$page = $_GET['page'] ?? 'home.php';
include($page);
?>