<?php
// LFI test variation #1175
$page = $_GET['page'] ?? 'home.php';
include($page);
?>