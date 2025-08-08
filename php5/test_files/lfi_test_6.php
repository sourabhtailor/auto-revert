<?php
// LFI test variation #6
$page = $_GET['page'] ?? 'home.php';
include($page);
?>