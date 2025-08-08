<?php
// LFI test variation #74
$page = $_GET['page'] ?? 'home.php';
include($page);
?>