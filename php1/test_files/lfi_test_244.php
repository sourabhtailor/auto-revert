<?php
// LFI test variation #244
$page = $_GET['page'] ?? 'home.php';
include($page);
?>