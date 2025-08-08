<?php
// LFI test variation #399
$page = $_GET['page'] ?? 'home.php';
include($page);
?>