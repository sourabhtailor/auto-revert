<?php
// LFI test variation #587
$page = $_GET['page'] ?? 'home.php';
include($page);
?>