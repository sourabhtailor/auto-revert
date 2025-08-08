<?php
// LFI test variation #716
$page = $_GET['page'] ?? 'home.php';
include($page);
?>