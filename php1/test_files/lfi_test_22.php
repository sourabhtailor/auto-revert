<?php
// LFI test variation #22
$page = $_GET['page'] ?? 'home.php';
include($page);
?>