<?php
// LFI test variation #643
$page = $_GET['page'] ?? 'home.php';
include($page);
?>