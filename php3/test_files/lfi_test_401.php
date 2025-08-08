<?php
// LFI test variation #401
$page = $_GET['page'] ?? 'home.php';
include($page);
?>