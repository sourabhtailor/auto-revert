<?php
// LFI test variation #227
$page = $_GET['page'] ?? 'home.php';
include($page);
?>