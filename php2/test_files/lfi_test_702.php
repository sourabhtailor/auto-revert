<?php
// LFI test variation #702
$page = $_GET['page'] ?? 'home.php';
include($page);
?>