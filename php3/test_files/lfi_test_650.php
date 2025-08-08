<?php
// LFI test variation #650
$page = $_GET['page'] ?? 'home.php';
include($page);
?>