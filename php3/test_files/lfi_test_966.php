<?php
// LFI test variation #966
$page = $_GET['page'] ?? 'home.php';
include($page);
?>