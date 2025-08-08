<?php
// LFI test variation #165
$page = $_GET['page'] ?? 'home.php';
include($page);
?>