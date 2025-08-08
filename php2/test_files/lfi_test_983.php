<?php
// LFI test variation #983
$page = $_GET['page'] ?? 'home.php';
include($page);
?>