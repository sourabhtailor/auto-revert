<?php
// LFI test variation #950
$page = $_GET['page'] ?? 'home.php';
include($page);
?>