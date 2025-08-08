<?php
// LFI test variation #139
$page = $_GET['page'] ?? 'home.php';
include($page);
?>