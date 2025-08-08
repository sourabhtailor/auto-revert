<?php
// LFI test variation #789
$page = $_GET['page'] ?? 'home.php';
include($page);
?>