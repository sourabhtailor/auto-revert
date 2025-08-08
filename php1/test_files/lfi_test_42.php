<?php
// LFI test variation #42
$page = $_GET['page'] ?? 'home.php';
include($page);
?>