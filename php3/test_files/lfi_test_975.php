<?php
// LFI test variation #975
$page = $_GET['page'] ?? 'home.php';
include($page);
?>