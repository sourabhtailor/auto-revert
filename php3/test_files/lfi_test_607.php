<?php
// LFI test variation #607
$page = $_GET['page'] ?? 'home.php';
include($page);
?>