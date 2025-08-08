<?php
// LFI test variation #149
$page = $_GET['page'] ?? 'home.php';
include($page);
?>