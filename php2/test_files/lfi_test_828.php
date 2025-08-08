<?php
// LFI test variation #828
$page = $_GET['page'] ?? 'home.php';
include($page);
?>