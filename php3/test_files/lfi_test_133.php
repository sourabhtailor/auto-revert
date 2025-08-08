<?php
// LFI test variation #133
$page = $_GET['page'] ?? 'home.php';
include($page);
?>