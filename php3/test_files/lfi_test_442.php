<?php
// LFI test variation #442
$page = $_GET['page'] ?? 'home.php';
include($page);
?>