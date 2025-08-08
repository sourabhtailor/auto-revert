<?php
// LFI test variation #96
$page = $_GET['page'] ?? 'home.php';
include($page);
?>