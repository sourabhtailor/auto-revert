<?php
// LFI test variation #75
$page = $_GET['page'] ?? 'home.php';
include($page);
?>