<?php
// LFI test variation #87
$page = $_GET['page'] ?? 'home.php';
include($page);
?>