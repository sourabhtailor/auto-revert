<?php
// LFI test variation #584
$page = $_GET['page'] ?? 'home.php';
include($page);
?>