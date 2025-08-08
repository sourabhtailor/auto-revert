<?php
// LFI test variation #859
$page = $_GET['page'] ?? 'home.php';
include($page);
?>