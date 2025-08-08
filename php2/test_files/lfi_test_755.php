<?php
// LFI test variation #755
$page = $_GET['page'] ?? 'home.php';
include($page);
?>