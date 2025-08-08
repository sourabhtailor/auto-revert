<?php
// LFI test variation #852
$page = $_GET['page'] ?? 'home.php';
include($page);
?>