<?php
// LFI test variation #738
$page = $_GET['page'] ?? 'home.php';
include($page);
?>