<?php
// LFI test variation #113
$page = $_GET['page'] ?? 'home.php';
include($page);
?>