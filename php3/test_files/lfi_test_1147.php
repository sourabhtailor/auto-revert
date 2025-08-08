<?php
// LFI test variation #1147
$page = $_GET['page'] ?? 'home.php';
include($page);
?>