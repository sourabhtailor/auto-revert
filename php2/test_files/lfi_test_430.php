<?php
// LFI test variation #430
$page = $_GET['page'] ?? 'home.php';
include($page);
?>