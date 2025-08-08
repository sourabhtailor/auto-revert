<?php
// LFI test variation #462
$page = $_GET['page'] ?? 'home.php';
include($page);
?>