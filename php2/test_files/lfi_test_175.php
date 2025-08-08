<?php
// LFI test variation #175
$page = $_GET['page'] ?? 'home.php';
include($page);
?>