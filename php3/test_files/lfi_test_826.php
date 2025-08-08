<?php
// LFI test variation #826
$page = $_GET['page'] ?? 'home.php';
include($page);
?>