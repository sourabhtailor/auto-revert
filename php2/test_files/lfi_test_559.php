<?php
// LFI test variation #559
$page = $_GET['page'] ?? 'home.php';
include($page);
?>