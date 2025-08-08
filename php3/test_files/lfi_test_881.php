<?php
// LFI test variation #881
$page = $_GET['page'] ?? 'home.php';
include($page);
?>