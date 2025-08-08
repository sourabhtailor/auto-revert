<?php
// LFI test variation #746
$page = $_GET['page'] ?? 'home.php';
include($page);
?>