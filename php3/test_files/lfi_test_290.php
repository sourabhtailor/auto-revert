<?php
// LFI test variation #290
$page = $_GET['page'] ?? 'home.php';
include($page);
?>