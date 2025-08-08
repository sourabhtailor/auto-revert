<?php
// LFI test variation #699
$page = $_GET['page'] ?? 'home.php';
include($page);
?>