<?php
// LFI test variation #222
$page = $_GET['page'] ?? 'home.php';
include($page);
?>