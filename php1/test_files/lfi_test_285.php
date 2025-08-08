<?php
// LFI test variation #285
$page = $_GET['page'] ?? 'home.php';
include($page);
?>