<?php
// LFI test variation #414
$page = $_GET['page'] ?? 'home.php';
include($page);
?>