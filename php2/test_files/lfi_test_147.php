<?php
// LFI test variation #147
$page = $_GET['page'] ?? 'home.php';
include($page);
?>