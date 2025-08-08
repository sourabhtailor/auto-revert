<?php
// LFI test variation #250
$page = $_GET['page'] ?? 'home.php';
include($page);
?>