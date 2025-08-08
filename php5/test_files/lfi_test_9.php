<?php
// LFI test variation #9
$page = $_GET['page'] ?? 'home.php';
include($page);
?>