<?php
// LFI test variation #905
$page = $_GET['page'] ?? 'home.php';
include($page);
?>