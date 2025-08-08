<?php
// LFI test variation #508
$page = $_GET['page'] ?? 'home.php';
include($page);
?>