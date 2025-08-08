<?php
// LFI test variation #1055
$page = $_GET['page'] ?? 'home.php';
include($page);
?>