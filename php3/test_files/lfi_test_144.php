<?php
// LFI test variation #144
$page = $_GET['page'] ?? 'home.php';
include($page);
?>