<?php
// LFI test variation #488
$page = $_GET['page'] ?? 'home.php';
include($page);
?>