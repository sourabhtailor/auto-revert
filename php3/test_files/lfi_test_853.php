<?php
// LFI test variation #853
$page = $_GET['page'] ?? 'home.php';
include($page);
?>