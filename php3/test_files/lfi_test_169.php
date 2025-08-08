<?php
// LFI test variation #169
$page = $_GET['page'] ?? 'home.php';
include($page);
?>