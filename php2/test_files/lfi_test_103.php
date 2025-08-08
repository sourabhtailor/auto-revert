<?php
// LFI test variation #103
$page = $_GET['page'] ?? 'home.php';
include($page);
?>