<?php
// LFI test variation #935
$page = $_GET['page'] ?? 'home.php';
include($page);
?>