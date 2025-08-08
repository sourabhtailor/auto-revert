<?php
// LFI test variation #243
$page = $_GET['page'] ?? 'home.php';
include($page);
?>