<?php
// LFI test variation #26
$page = $_GET['page'] ?? 'home.php';
include($page);
?>