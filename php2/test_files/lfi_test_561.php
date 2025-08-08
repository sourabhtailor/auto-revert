<?php
// LFI test variation #561
$page = $_GET['page'] ?? 'home.php';
include($page);
?>