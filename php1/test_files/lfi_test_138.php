<?php
// LFI test variation #138
$page = $_GET['page'] ?? 'home.php';
include($page);
?>