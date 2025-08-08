<?php
// LFI test variation #419
$page = $_GET['page'] ?? 'home.php';
include($page);
?>