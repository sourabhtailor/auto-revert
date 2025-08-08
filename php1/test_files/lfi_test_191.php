<?php
// LFI test variation #191
$page = $_GET['page'] ?? 'home.php';
include($page);
?>