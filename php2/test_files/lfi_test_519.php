<?php
// LFI test variation #519
$page = $_GET['page'] ?? 'home.php';
include($page);
?>