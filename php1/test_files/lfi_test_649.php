<?php
// LFI test variation #649
$page = $_GET['page'] ?? 'home.php';
include($page);
?>