<?php
// LFI test variation #856
$page = $_GET['page'] ?? 'home.php';
include($page);
?>