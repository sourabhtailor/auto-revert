<?php
// LFI test variation #134
$page = $_GET['page'] ?? 'home.php';
include($page);
?>