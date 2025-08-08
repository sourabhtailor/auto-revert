<?php
// LFI test variation #1079
$page = $_GET['page'] ?? 'home.php';
include($page);
?>