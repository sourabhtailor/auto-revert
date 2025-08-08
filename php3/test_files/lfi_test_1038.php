<?php
// LFI test variation #1038
$page = $_GET['page'] ?? 'home.php';
include($page);
?>