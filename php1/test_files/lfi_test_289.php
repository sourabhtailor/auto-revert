<?php
// LFI test variation #289
$page = $_GET['page'] ?? 'home.php';
include($page);
?>