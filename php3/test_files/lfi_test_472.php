<?php
// LFI test variation #472
$page = $_GET['page'] ?? 'home.php';
include($page);
?>