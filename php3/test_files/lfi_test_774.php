<?php
// LFI test variation #774
$page = $_GET['page'] ?? 'home.php';
include($page);
?>