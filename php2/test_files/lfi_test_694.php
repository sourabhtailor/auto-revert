<?php
// LFI test variation #694
$page = $_GET['page'] ?? 'home.php';
include($page);
?>