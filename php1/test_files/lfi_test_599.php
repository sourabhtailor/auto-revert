<?php
// LFI test variation #599
$page = $_GET['page'] ?? 'home.php';
include($page);
?>