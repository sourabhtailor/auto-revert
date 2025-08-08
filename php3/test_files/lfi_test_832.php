<?php
// LFI test variation #832
$page = $_GET['page'] ?? 'home.php';
include($page);
?>