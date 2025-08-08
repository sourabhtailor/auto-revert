<?php
// LFI test variation #296
$page = $_GET['page'] ?? 'home.php';
include($page);
?>