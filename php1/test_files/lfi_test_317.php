<?php
// LFI test variation #317
$page = $_GET['page'] ?? 'home.php';
include($page);
?>