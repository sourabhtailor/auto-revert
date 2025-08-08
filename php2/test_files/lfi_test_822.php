<?php
// LFI test variation #822
$page = $_GET['page'] ?? 'home.php';
include($page);
?>