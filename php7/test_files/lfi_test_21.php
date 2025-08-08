<?php
// LFI test variation #21
$page = $_GET['page'] ?? 'home.php';
include($page);
?>