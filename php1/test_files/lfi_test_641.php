<?php
// LFI test variation #641
$page = $_GET['page'] ?? 'home.php';
include($page);
?>