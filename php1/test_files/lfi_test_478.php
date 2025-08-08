<?php
// LFI test variation #478
$page = $_GET['page'] ?? 'home.php';
include($page);
?>