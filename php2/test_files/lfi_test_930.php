<?php
// LFI test variation #930
$page = $_GET['page'] ?? 'home.php';
include($page);
?>