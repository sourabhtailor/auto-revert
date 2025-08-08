<?php
// LFI test variation #393
$page = $_GET['page'] ?? 'home.php';
include($page);
?>