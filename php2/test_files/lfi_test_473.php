<?php
// LFI test variation #473
$page = $_GET['page'] ?? 'home.php';
include($page);
?>