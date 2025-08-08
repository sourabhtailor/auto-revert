<?php
// LFI test variation #276
$page = $_GET['page'] ?? 'home.php';
include($page);
?>