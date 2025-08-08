<?php
// LFI test variation #579
$page = $_GET['page'] ?? 'home.php';
include($page);
?>