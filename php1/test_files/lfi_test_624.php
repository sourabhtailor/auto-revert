<?php
// LFI test variation #624
$page = $_GET['page'] ?? 'home.php';
include($page);
?>