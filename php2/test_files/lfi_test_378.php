<?php
// LFI test variation #378
$page = $_GET['page'] ?? 'home.php';
include($page);
?>