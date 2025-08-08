<?php
// LFI test variation #776
$page = $_GET['page'] ?? 'home.php';
include($page);
?>