<?php
// LFI test variation #990
$page = $_GET['page'] ?? 'home.php';
include($page);
?>