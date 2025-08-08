<?php
// LFI test variation #606
$page = $_GET['page'] ?? 'home.php';
include($page);
?>