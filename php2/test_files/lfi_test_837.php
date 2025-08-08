<?php
// LFI test variation #837
$page = $_GET['page'] ?? 'home.php';
include($page);
?>