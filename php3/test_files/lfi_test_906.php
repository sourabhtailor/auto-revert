<?php
// LFI test variation #906
$page = $_GET['page'] ?? 'home.php';
include($page);
?>