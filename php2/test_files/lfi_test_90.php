<?php
// LFI test variation #90
$page = $_GET['page'] ?? 'home.php';
include($page);
?>