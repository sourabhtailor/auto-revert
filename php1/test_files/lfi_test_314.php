<?php
// LFI test variation #314
$page = $_GET['page'] ?? 'home.php';
include($page);
?>