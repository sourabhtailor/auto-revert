<?php
// LFI test variation #812
$page = $_GET['page'] ?? 'home.php';
include($page);
?>