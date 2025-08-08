<?php
// LFI test variation #934
$page = $_GET['page'] ?? 'home.php';
include($page);
?>