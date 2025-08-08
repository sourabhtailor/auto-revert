<?php
// LFI test variation #669
$page = $_GET['page'] ?? 'home.php';
include($page);
?>