<?php
// LFI test variation #923
$page = $_GET['page'] ?? 'home.php';
include($page);
?>