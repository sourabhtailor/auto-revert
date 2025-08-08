<?php
// LFI test variation #484
$page = $_GET['page'] ?? 'home.php';
include($page);
?>