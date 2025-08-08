<?php
// LFI test variation #568
$page = $_GET['page'] ?? 'home.php';
include($page);
?>