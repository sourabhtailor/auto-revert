<?php
// LFI test variation #341
$page = $_GET['page'] ?? 'home.php';
include($page);
?>