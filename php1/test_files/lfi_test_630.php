<?php
// LFI test variation #630
$page = $_GET['page'] ?? 'home.php';
include($page);
?>