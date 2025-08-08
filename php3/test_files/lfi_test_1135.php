<?php
// LFI test variation #1135
$page = $_GET['page'] ?? 'home.php';
include($page);
?>