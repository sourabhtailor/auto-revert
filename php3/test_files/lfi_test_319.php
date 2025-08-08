<?php
// LFI test variation #319
$page = $_GET['page'] ?? 'home.php';
include($page);
?>