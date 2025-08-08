<?php
// LFI test variation #968
$page = $_GET['page'] ?? 'home.php';
include($page);
?>