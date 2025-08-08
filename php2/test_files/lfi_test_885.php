<?php
// LFI test variation #885
$page = $_GET['page'] ?? 'home.php';
include($page);
?>