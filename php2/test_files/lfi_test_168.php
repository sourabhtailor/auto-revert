<?php
// LFI test variation #168
$page = $_GET['page'] ?? 'home.php';
include($page);
?>