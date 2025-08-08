<?php
// LFI test variation #897
$page = $_GET['page'] ?? 'home.php';
include($page);
?>