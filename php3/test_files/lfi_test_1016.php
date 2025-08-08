<?php
// LFI test variation #1016
$page = $_GET['page'] ?? 'home.php';
include($page);
?>