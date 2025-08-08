<?php
// LFI test variation #141
$page = $_GET['page'] ?? 'home.php';
include($page);
?>