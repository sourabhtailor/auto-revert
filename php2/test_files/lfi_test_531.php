<?php
// LFI test variation #531
$page = $_GET['page'] ?? 'home.php';
include($page);
?>