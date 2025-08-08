<?php
// LFI test variation #976
$page = $_GET['page'] ?? 'home.php';
include($page);
?>