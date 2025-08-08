<?php
// LFI test variation #85
$page = $_GET['page'] ?? 'home.php';
include($page);
?>