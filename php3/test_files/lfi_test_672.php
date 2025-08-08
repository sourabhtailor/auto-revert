<?php
// LFI test variation #672
$page = $_GET['page'] ?? 'home.php';
include($page);
?>