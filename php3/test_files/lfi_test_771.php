<?php
// LFI test variation #771
$page = $_GET['page'] ?? 'home.php';
include($page);
?>