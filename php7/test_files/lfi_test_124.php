<?php
// LFI test variation #124
$page = $_GET['page'] ?? 'home.php';
include($page);
?>