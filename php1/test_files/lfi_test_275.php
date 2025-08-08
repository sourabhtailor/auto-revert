<?php
// LFI test variation #275
$page = $_GET['page'] ?? 'home.php';
include($page);
?>