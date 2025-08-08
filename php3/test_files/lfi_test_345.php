<?php
// LFI test variation #345
$page = $_GET['page'] ?? 'home.php';
include($page);
?>