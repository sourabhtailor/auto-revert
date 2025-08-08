<?php
// LFI test variation #737
$page = $_GET['page'] ?? 'home.php';
include($page);
?>