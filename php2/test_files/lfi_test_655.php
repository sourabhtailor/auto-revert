<?php
// LFI test variation #655
$page = $_GET['page'] ?? 'home.php';
include($page);
?>