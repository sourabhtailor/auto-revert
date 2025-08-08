<?php
// LFI test variation #373
$page = $_GET['page'] ?? 'home.php';
include($page);
?>