<?php
// LFI test variation #679
$page = $_GET['page'] ?? 'home.php';
include($page);
?>