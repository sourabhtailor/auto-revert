<?php
// LFI test variation #465
$page = $_GET['page'] ?? 'home.php';
include($page);
?>