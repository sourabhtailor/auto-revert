<?php
// LFI test variation #647
$page = $_GET['page'] ?? 'home.php';
include($page);
?>