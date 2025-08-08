<?php
// LFI test variation #946
$page = $_GET['page'] ?? 'home.php';
include($page);
?>