<?php
// LFI test variation #334
$page = $_GET['page'] ?? 'home.php';
include($page);
?>