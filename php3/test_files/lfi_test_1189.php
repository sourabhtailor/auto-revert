<?php
// LFI test variation #1189
$page = $_GET['page'] ?? 'home.php';
include($page);
?>