<?php
// LFI test variation #1153
$page = $_GET['page'] ?? 'home.php';
include($page);
?>