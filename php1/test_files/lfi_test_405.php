<?php
// LFI test variation #405
$page = $_GET['page'] ?? 'home.php';
include($page);
?>