<?php
// LFI test variation #157
$page = $_GET['page'] ?? 'home.php';
include($page);
?>