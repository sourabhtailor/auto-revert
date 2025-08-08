<?php
// LFI test variation #400
$page = $_GET['page'] ?? 'home.php';
include($page);
?>