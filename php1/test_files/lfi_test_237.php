<?php
// LFI test variation #237
$page = $_GET['page'] ?? 'home.php';
include($page);
?>