<?php
// LFI test variation #533
$page = $_GET['page'] ?? 'home.php';
include($page);
?>