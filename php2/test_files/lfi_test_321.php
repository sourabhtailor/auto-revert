<?php
// LFI test variation #321
$page = $_GET['page'] ?? 'home.php';
include($page);
?>